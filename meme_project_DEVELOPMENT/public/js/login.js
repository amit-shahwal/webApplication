const login = async (email, password) => {
  console.log(email, password);
  try {
    const res = await axios({
      method: "POST",
      url: "http://127.0.0.1:9000/api/v1/users/login",
      data: {
        email: email,
        password: password,
      },
    });
    console.log(res);
  } catch (err) {
    console.log(err.response.data);
  }
};

document.querySelector(".form").addEventListener("submit", (eve) => {
  eve.preventDefault();
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  console.log(email);
  login(email, password);
});
