const validator = new window.JustValidate("#reg-form");

validator
  .addField("#name", [
    {
      rule: "required",
    },
  ])
  .addField("#email", [
    {
      rule: "required",
    },
    {
      rule: "email",
    },
    {
      validator: (value) => () => {
        return fetch("validate-email.php?email=" + encodeURIComponent(value))
          .then(function (response) {
            return response.json();
          })
          .then(function (json) {
            return json.available;
          });
      },
      errorMessage: "email already taken",
    },
  ])
  .addField("#password", [
    {
      rule: "required",
    },
    {
      rule: "password",
    },
  ])
  .addField("#password_confirmation", [
    {
      validator: (value, field) => {
        return value === field["#password"].elem.value;
      },
      errorMessage: "Password Not Match",
    },
  ])
  .onSuccess((event) => {
    document.getElementById("reg-form").submit();
  });

//   .addField('#basic_age', [
//     {
//       rule: 'required',
//     },
//     {
//       rule: 'number',
//     },
//     {
//       rule: 'minNumber',
//       value: 18,
//     },
//     {
//       rule: 'maxNumber',
//       value: 150,
//     },
//   ]);
