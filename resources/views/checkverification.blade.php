<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Age Verification</title>
</head>
<body>
<div class="container">
    <form action="{{route('welcome')}}" class="age-verification-form">
      <p>Can you confirm that you are over 18 years of age?</p>
      <button class="yes-button" name="yes" value="yes">Yes,Im 18</button>
      <button class="no-button" name="no" value="no">No</button>
    </form>
  </div>
  
</body>
</html>