const form = document.getElementById("contact-form");
const feedback = document.getElementById("form-feedback");

if (form) {
  form.addEventListener("submit", (e) => {
    e.preventDefault();

    feedback.textContent = "";
    feedback.classList.remove("error", "success");

    let isValid = true;

    const fields = form.querySelectorAll(
      "input[required], textarea[required]"
    );

    fields.forEach((field) => {
      const error = field.parentElement.querySelector(".error-message");

      if (!field.value.trim()) {
        error.textContent = "Ce champ est obligatoire";
        isValid = false;
      } else {
        error.textContent = "";
      }

      if (field.type === "email" && field.value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(field.value)) {
          error.textContent = "Email invalide";
          isValid = false;
        }
      }
    });

    if (!isValid) return;

    sendForm();
  });
}

async function sendForm() {
  feedback.textContent = "";
  feedback.classList.remove("error", "success");

  const formData = new FormData(form);

  try {
    const response = await fetch("../php/actions/send-devis.php", {
      method: "POST",
      body: formData
    });

    if (!response.ok) {
      throw new Error("Erreur serveur");
    }

    const result = await response.json();

    if (result.success) {
      feedback.textContent = result.message;
      feedback.classList.add("success");
      feedback.style.color = "green";
      form.reset();
    } else {
      feedback.textContent = result.message || "Une erreur est survenue.";
      feedback.classList.add("error");
      feedback.style.color = "red";
    }

  } catch (error) {
    feedback.textContent = "Erreur de connexion au serveur.";
    feedback.classList.add("error");
    feedback.style.color = "red";
  }
}
