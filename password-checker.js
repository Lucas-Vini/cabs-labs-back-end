function checkPassword(){
	var password = document.getElementById("pc").value
	var msg = document.getElementById('pc-msg')
	var format = /['"!@#$%&*()-+=\[\]_^~;:.,<>?/{}]/;
	var number_flag = false
	var special_char_flag = false
	var upper_case_flag = false
	var lower_case_flag = false

	for (var i = password.length - 1; i >= 0; i--) {
		if (password[i] >= '0' && password[i] <= '9'){
			number_flag = true
		} else if(format.test(password[i])){
			special_char_flag = true
		} else if(password[i] == password[i].toUpperCase()){
			upper_case_flag = true
		} else{
			lower_case_flag = true
		}
	}

	if (password.length >= 8 && number_flag && special_char_flag && upper_case_flag && lower_case_flag){
		msg.textContent = "Senha válida"
		msg.className = "p-1 text-success"		
	} else {
		msg.textContent = "A senha deve ter pelo menos 8 caracteres"
		msg.className = "p-1 text-danger"
	}
	if (!lower_case_flag){
		msg.textContent = "A senha deve ter pelo menos uma letra minúscula"
		msg.className = "p-1 text-danger"		
	}
	if (!upper_case_flag){
		msg.textContent = "A senha deve ter pelo menos uma letra maiúscula"
		msg.className = "p-1 text-danger"		
	}
	if (!special_char_flag){
		msg.textContent = "A senha deve ter pelo menos um caracter especial"
		msg.className = "p-1 text-danger"		
	}
	if (!number_flag){
		msg.textContent = "A senha deve ter pelo menos um número"
		msg.className = "p-1 text-danger"
	}
}