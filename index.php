<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login Form</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

  body, html {
    height: 100%;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background: linear-gradient(135deg, #d98a8d, #203565);
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .login-container {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    padding: 50px 40px 70px 40px;
    width: 350px;
    box-sizing: border-box;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    position: relative;
  }

  .avatar {
    width: 80px;
    height: 80px;
    background: #022949;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: -40px;
    left: calc(50% - 40px);
  }

  .avatar svg {
    stroke: white;
    width: 35px;
    height: 35px;
  }

  form {
    margin-top: 50px;
  }

  .input-group {
    display: flex;
    margin-bottom: 20px;
    background: #254060;
    border-radius: 5px;
    overflow: hidden;
  }

  .input-icon {
    background: #022949;
    padding: 0 15px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .input-icon svg {
    stroke: white;
    width: 20px;
    height: 20px;
  }

  input[type="email"], input[type="password"] {
    flex: 1;
    border: none;
    padding: 12px 15px;
    font-size: 14px;
    background: transparent;
    color: white;
    outline: none;
  }

  input::placeholder {
    color: #a8b1c4;
  }

  .options {
    display: flex;
    justify-content: space-between;
    font-size: 13px;
    color: #a8b1c4;
    margin-bottom: 40px;
    align-items: center;
  }

  .options label {
    display: flex;
    align-items: center;
  }

  .options input[type="checkbox"] {
    margin-right: 8px;
    accent-color: #022949;
  }

  .options a {
    font-style: italic;
    color: #a8b1c4;
    text-decoration: none;
  }

  .options a:hover {
    text-decoration: underline;
  }

  .login-btn {
    width: 100%;
    padding: 15px 0;
    background: linear-gradient(90deg, #d98a8d 0%, #203565 100%);
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 0 0 20px 20px;
    cursor: pointer;
    font-size: 16px;
    letter-spacing: 1.5px;
    box-shadow: 0 4px 15px rgba(217, 138, 141, 0.7);
    transition: background 0.3s ease;
  }

  .login-btn:hover {
    background: linear-gradient(90deg, #b36a6b 0%, #0f2345 100%);
  }
</style>
</head>
<body>
  <div class="login-container">
    <div class="avatar">
      <svg fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="white" viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M5.5 21a7.5 7.5 0 0 1 13 0"/></svg>
    </div>
    <form>
      <div class="input-group">
        <div class="input-icon">
          <svg fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="white" viewBox="0 0 24 24"><path d="M16 12H8m0 0a4 4 0 1 1 8 0m-8 0v6"/></svg>
        </div>
        <input type="email" placeholder="Email ID" required />
      </div>
      <div class="input-group">
        <div class="input-icon">
          <svg fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="white" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
        <input type="password" placeholder="Password" required />
      </div>
      <div class="options">
        <label><input type="checkbox" />Remember me</label>
        <a href="#">Forgot Password?</a>
      </div>
      <button type="submit" class="login-btn">LOGIN</button>
    </form>
  </div>
</body>
</html>