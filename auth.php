<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
  <form target="_blank" action="https://google.com" method="POST">
      <h1>Firebase Phone verification In PHP</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
      <input type="text" id="verificationCode" placeholder="Enter verification code">
      
      </div>
     
      <button type="button" onclick="codeverify();">Verify code</button>
    
    </form>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    const firebaseConfig = {
  apiKey: "AIzaSyD8OE5fjwBqdx57akKwRUUWX_hUcV--020",
  authDomain: "mantavya-ebb70.firebaseapp.com",
  projectId: "mantavya-ebb70",
  storageBucket: "mantavya-ebb70.appspot.com",
  messagingSenderId: "1081219787633",
  appId: "1:1081219787633:web:74df9f4e7f6d812d1024d0",
  measurementId: "G-CPY3GHC6JE"
};
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>
</html>