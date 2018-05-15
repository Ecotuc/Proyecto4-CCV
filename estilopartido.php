* {
	box-sizing: border-box;
}

body{
	margin: 0;
	font-family: sans-serif;
	background: #204862;
}

h2 {
	color: #fff;
	text-align: center;
}

.form-register{
	width: 95%;
	max-width: 500px;
	margin: auto;
	background: white;
	border-radius: 7px;
}

.form-titulo{
	background: deepskyblue;
	color: #fff;
	padding: 20px;
	text-align: center;
	font-weight: 100;
	font-size: 30px;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	border-bottom: 5px solid crimson;
}

.contenedor-inputs{
	padding: 10px 30px;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}

input{
	margin-bottom: 15px;
	padding: 15px;
	font-size: 16px;
	border-radius: 3px;
	border: 1px solid darkgray;
}

select{
	margin-bottom: 15px;
	padding: 15px;
	font-size: 16px;
	border-radius: 3px;
	border: 1px solid darkgray;
}

.input-48{
	width: 100%;
}

.btn-enviar{
	background: crimson;
	color: #fff;
	margin: auto;
	padding: 10px 40px;
	cursor: pointer;
	font-size: 20px;
}
.btn-enviar:active{
	transform: scale(1.05);
}

.form__link{
	width: 100%;
	margin: 7px;
	text-align: center;
	font-size: 14px;
}
.error {
	color:red;
}