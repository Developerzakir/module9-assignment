<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	

<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active"  href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>



<div class="blog mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
					<form>

						<H2 class="text-center">Contact Us</H2>
						<div class="mb-3">
					    <label for="name" class="form-label">Full Name</label>
					    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name">
					  </div>

					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email Address">
					  </div>
					  <div class="mb-3">
					    <label for="subject" class="form-label">Subject</label>
					    <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject">
					  </div>

					  <div class="mb-3">
					  	<label for="message" class="form-label">Message</label>
					  	<textarea name="message"  class="form-control"  cols="30" rows="5"></textarea>
					  </div>
					  
					  <button type="submit" name="submit_form" class="btn btn-primary">Submit</button>
	       </form>
			</div>

	
		</div>
	</div>
</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

