<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mybusinesswebsite</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>
<div class="container">
  <br>
  <h1>Feel Free To Apply:</h1>
  <p style="text-align: right "><a href="/" style="color: red">back to main?</a></p>
  <hr> <br>


  <form action="/" method="POST">
    @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="Fname">First name</label>
        <input type="text" class="form-control" id="Fname" name="Fname" placeholder="First name" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="Lname">Last name</label>
        <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Last name" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
      </div>

      <div class="col-md-3 mb-3">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="State" required>
      </div>


   </div>


   <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="phone">Enter a phone number</label>
      <input class="form-control" type="tel" id="phone" name="phone" placeholder="+251-942-828-018" pattern="[0-9]{10}" required>
    </div>

    <div class="col-md-5 mb-3">
      <label for="city">Choose You Use bank</label>
      <select class="form-control" name="bank" id="bank">
        <option>Afaan Oromo Language</option>
        <option>ትግርኛ ቋንቋ</option>
        <option>Afarigna</option>
        <option>Somaligna</option>
        <option>Zergula</option>
        <option>French</option>
        <option>Spanish</option>
        <option>Russian</option>
        <option>Arabic</option>
        <option>Arabic</option>
        <option>Other</option>
      </select>
    </div>
 </div>


 <div class="form-row">
  <div class="col-md-12 mb-12">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
  </div>


</div>


    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          If You Choose Other Please write You went language also you can write the resion"
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <hr>
    <button id="btn btn-primary" class="btn btn-primary" type="submit">Submit form</button>
  </form>


  <acronym title="sami"></acronym>

  <script src="/js/alert.js"></script>

</div>







</body>

</html>
