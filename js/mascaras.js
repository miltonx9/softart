<script type="text/javascript">
     
     
function formatar(src, mask) {
		var i = src.value.length;
		var saida = mask.substring(i,i+1);
		var ascii = event.keyCode;
		if (saida == "A") {
			if ((ascii >=97) && (ascii <= 122)) { event.keyCode -= 32; }
			else { event.keyCode = 0; }
		} else if (saida == "0") {
			if ((ascii >= 48) && (ascii <= 57)) { return }
			else { event.keyCode = 0 }
		} else if (saida == "#") {
			return;
		} else {
			src.value += saida;
			
		   
			if (saida == "A") {
				if ((ascii >=97) && (ascii <= 122)) { event.keyCode -= 32; }
			} else { return; }
		}
	}


/*
Data
onkeypress="formatar(this,'00/00/0000')"

Hora
onkeypress="formatar(this,'00:00')"

CPF
onkeypress="formatar(this,'000.000.000-00')"

Telefone
onkeypress="formatar(this,'(00)0000-0000')"

CEP
onkeypress="formatar(this,'00000-000')"

*/
</script>


