document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".form_content");
  const originalPlaceholders = {};

  function getOriginalPlaceholders() {
    form.querySelectorAll("input, select").forEach((input) => {
      originalPlaceholders[input.name] = input.placeholder;
    });
  }

  function validateField(input) {
    const inputValue = input.value.trim();

    switch (input.name) {
      case "nome":
        if (inputValue.length > 45 || inputValue.length <= 0) {
          alert("O campo Nome não pode ter mais que 50 caracteres.");
          isValid = false;
        }
        break;

      case "email":
        if (
          !inputValue.includes("@") ||
          !inputValue.includes("gmail") ||
          !inputValue.includes(".com")
        ) {
          alert('O campo Email deve conter "@", "gmail" e ".com".');
          isValid = false;
        }
        break;

      case "senha":
        if (!/^\d{8}$/.test(inputValue)) {
          alert("O campo Senha deve ter 8 números.");
          isValid = false;
        }
        break;

      case "confirmarSenha":
        const senha = form.querySelector("#senha").value.trim();
        if (inputValue !== senha) {
          alert("O campo Confirmar Senha deve ser igual ao campo Senha.");
          isValid = false;
        }
        break;

      case "dataNascimento":
        const anoNascimento = new Date(inputValue).getFullYear();
        if (anoNascimento <= 1950 && anoNascimento >= 2023) {
          alert("O ano de nascimento inválida.");
          isValid = false;
        }
        break;

      case "cep":
        if (!/^\d{8}$/.test(inputValue)) {
          alert("O campo CEP deve ter 8 números.");
          isValid = false;
        }
        break;
    }
    if (!isValid) {
      input.value = "";
      input.placeholder = "";
    } else {
      input.placeholder = originalPlaceholders[input.name];
    }
  }

  function validateForm(event) {
    const inputFields = form.querySelectorAll("input, select");

    inputFields.forEach(validateField);

    if (!isValid) {
      event.preventDefault();
    } else {
      inputFields.forEach((input) => {
        submit();
        input.placeholder = originalPlaceholders[input.name];
      });
    }
  }

  form.addEventListener("submit", validateForm);

  getOriginalPlaceholders();

  console.log("Validações ativas :}");
});
