const login_validator = new window.JustValidate("#login-form");

login_validator
  .addField("#email", [
    {
      rule: "required",
    },
  ])
  .addField("#password", [
    {
      rule: "required",
    },
  ])
  .onSuccess((event) => {
    document.getElementById("login-form").submit();
  });
