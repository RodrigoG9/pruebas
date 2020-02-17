let btnReserva = document.getElementById("btn-reserva");
let loginModal = document.getElementById("loginModal");
let chart = document.getElementById("grafico-visitas");
let btnExport = document.getElementById("btn-export");

$(document).ready(function() {
	if (btnReserva !== null) {
		btnReserva.addEventListener("click", e => {
			e.preventDefault();
			hacerReserva();
		});
	}

	if (loginModal !== null) {
		login();
	}

	if (chart) {
		graficarVisitas();
	}

	if (btnExport) {
		agregarFuncion();
	}

	$(function() {
		$("#datetimepicker1").datetimepicker({
			format: "MM/DD/YYYY HH:00"
		});
	});

	//Manda la imagen seleccionada 2 a send img 2
	$(document).on("change", "input[id=img2]", function(e) {
		// Obtenemos la ruta temporal mediante el evento
		var TmpPath = URL.createObjectURL(e.target.files[0]);
		// Mostramos la ruta temporal
		//	$("#span2").html(TmpPath);
		$("#send_img2").attr("src", TmpPath);
	});
	$(document).on("change", "input[id=img1]", function(e) {
		// Obtenemos la ruta temporal mediante el evento
		var TmpPath = URL.createObjectURL(e.target.files[0]);
		// Mostramos la ruta temporal
		//	$("#span2").html(TmpPath);
		$("#send_img").attr("src", TmpPath);
	});

	$("#btn_insertar").click(function(e) {
		e.preventDefault();
		var tituloi = $("#titulo").val();
		var textoi = $("#area").val();
		var img1i = $("#img1")[0].files;
		var img2i = $("#img2")[0].files;
		var lector = new FileReader();

		let formData = new FormData();
		formData.append("tituloi", tituloi);
		formData.append("areai", textoi);
		formData.append("foto1i", img1i[0]);
		formData.append("foto2i", img2i[0]);

		$.ajax({
			url: "/formulario/insertar",
			data: formData,
			type: "POST",
			contentType: false,
			processData: false,
			success: function(resultados) {
				console.log("Petición terminada. Resultados", resultados);
				let d = document.getElementById("ajx");
				d.innerHTML = resultados;
			}
		});
	});
});

const agregarFuncion = () => {
	btnExport.addEventListener("click", e => {
		e.preventDefault();
		let fecha = document.getElementById("fechaReserva").value;
		location.href = "/export/pdf?fecha=" + fecha.split(" ")[0];
	});
};

const graficarVisitas = () => {
	$.ajax({
		type: "GET",
		url: "/dashboard/visitas",
		data: "data",
		success: function(response) {
			console.log(response);
			Highcharts.chart("grafico-visitas", chartOptions(response));
		}
	});
};

const login = () => {
	btnLogin = document.getElementById("btn-login");
	btnLogin.addEventListener("click", e => {
		e.preventDefault();
		let data = {
			nick: document.getElementById("username").value,
			password: document.getElementById("password").value
		};

		$.ajax({
			type: "POST",
			url: "/login",
			data: data,
			statusCode: {
				200: res => {
					location.href = "/dashboard";
				},
				401: res => {
					const json = JSON.parse(res.responseText);
					alert(json.mensaje);
				}
			}
		});
	});
};

const hacerReserva = () => {
	let nombres = document.getElementById("fullNames");
	let fecha = document.getElementById("fechaReserva");
	let cantidad = document.getElementById("totalPersonas");

	if (nombres.value && fecha.value && cantidad.value) {
		const validacionFecha = validarFecha(fecha.value);
		const validacionCantidad = validarCantidad(cantidad.value);

		let mensajeFecha = document.getElementById("fechaMsg");
		let mensajeCantidad = document.getElementById("totalPersonasMsg");
		mostrarError(
			validacionFecha,
			mensajeFecha,
			"La fecha seleccionada no es valida"
		);
		mostrarError(
			validacionCantidad,
			mensajeCantidad,
			"Solo se puede reservar hasta 30 personas"
		);

		if (validacionFecha && validacionCantidad) {
			let data = {
				nombres: nombres.value,
				fecha: fecha.value,
				cantidad: cantidad.value
			};

			$.ajax({
				type: "POST",
				url: "/salas/reservar",
				data: data,
				success: function(response) {
					let mTitulo = document.getElementById("mr-titulo");
					let mContenido = document.getElementById("mr-contenido");
					mTitulo.innerHTML = "Solicitud completada";
					mContenido.innerHTML = `
						${response.mensaje} para la fecha ${response.data.Fecha}
						para ${response.data.Personas} personas.
						Recuerde que su reserva es valida por 1 hora.
					`;
					$("#myModal").modal("show");
					nombres.value = "";
					fecha.value = "";
					cantidad.value = "";
				},
				statusCode: {
					400: function(resp) {
						const obj = JSON.parse(resp.responseText);

						let mTitulo = document.getElementById("mr-titulo");
						let mContenido = document.getElementById("mr-contenido");
						mTitulo.innerHTML = "Error al procesar solicitud";
						mContenido.innerHTML = obj.mensaje;
						$("#myModal").modal("show");
					}
				}
			});
		}
	} else {
		let mTitulo = document.getElementById("mr-titulo");
		let mContenido = document.getElementById("mr-contenido");
		mTitulo.innerHTML = "ERROR";
		mContenido.innerHTML =
			"Por favor, complete todos los campos del formulario antes de continuar";
		$("#myModal").modal("show");
	}
};

const validarCantidad = cantidad => {
	if (cantidad > 0 && cantidad <= 30) {
		return true;
	}
	return false;
};
const validarFecha = fecha => {
	let horario = fecha.split(" ");
	//validacion fecha
	let fechaSeleccionada = new Date(horario[0]);
	let dia = fechaSeleccionada.getDay();

	if (dia === 1 || dia === 0) {
		return false;
	} else {
		//validacion hora
		let hora = horario[1].split(":")[0];
		let periodo = horario[2];
		if (hora < 9 || hora > 17) {
			return false;
		}
		return true;
	}
};
const mostrarError = (estado, elemento, mensaje) => {
	if (!estado) {
		elemento.innerHTML = mensaje;
		elemento.style.display = "block";
	} else {
		elemento.innerHTML = "";
		elemento.style.display = "none";
	}
};

const chartOptions = data => {
	return {
		chart: {
			type: "column"
		},
		title: {
			text: "Visitas a la pagina durante la semana"
		},
		xAxis: {
			categories: [
				"Domingo",
				"Lunes",
				"Martes",
				"Miercoles",
				"Jueves",
				"Viernes",
				"Sabado"
			]
		},
		yAxis: {
			min: 0,
			title: {
				text: "Cantidad de visitas"
			},
			stackLabels: {
				enabled: true,
				style: {
					fontWeight: "bold",
					color:
						// theme
						(Highcharts.defaultOptions.title.style &&
							Highcharts.defaultOptions.title.style.color) ||
						"gray"
				}
			}
		},
		legend: {
			align: "right",
			x: -30,
			verticalAlign: "top",
			y: 25,
			floating: true,
			backgroundColor:
				Highcharts.defaultOptions.legend.backgroundColor || "white",
			borderColor: "#CCC",
			borderWidth: 1,
			shadow: false
		},
		tooltip: {
			headerFormat: "<b>{point.x}</b><br/>",
			pointFormat: "Visitas: {point.stackTotal}"
		},
		plotOptions: {
			column: {
				stacking: "normal"
			}
		},
		series: [
			{
				name: "Dia",
				data: data
			}
		]
	};
};
