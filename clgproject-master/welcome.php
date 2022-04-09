<?php
session_start();
 if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
   header('Location:login.php');
 }
 $id = $_SESSION['user_id']; 
 include('db/connect.php');
 $query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learner'sPad</title>
    <link rel="stylesheet" href="https://rawgit.com/jgthms/minireset.css/master/minireset.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<?php require 'nav.php'?>
    <section id="first-section">
        <div id="title">
            <h1 class="bold-text uppercase-text title-text" id="series-title">Learner's</h1>
            <h2 class="thin-text uppercase-text subtitle-text" id="author-title">Pad</h2>
        </div>
        <div class="horizontal-block hero-covers">
            <img class="hero-book2" src="https://image.ibb.co/eQrGLq/book2.jpg" alt="Book 2">
            <img class="hero-book1" src="https://image.ibb.co/myb5DA/book1.jpg" alt="Book 1">
            <img class="hero-book3" src="https://image.ibb.co/c7VXtA/book3.jpg" alt="Book 3">
        </div>
        <div id="btn-block" class="horizontal-block">
            <a href=""><button class="btn btn-hero">Read <span class="bold-text">Preview</span></button></a>
            <a href=""><button class="btn btn-hero">Read <span class="bold-text">Series</span></button></a>
        </div>
    </section>
    <section>
        <h3 class="bold-text uppercase-text">Harry Potter and the Philosopher's Stone</h3>
        <div class="vertical-block spaces">
            <img class="cover" src="https://image.ibb.co/myb5DA/book1.jpg" alt="Harry Potter and the Philosopher's Stone">
            <p class="article-text"> The first novel in the Harry Potter series and Rowling's debut novel, it follows Harry
                Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter
                of acceptance to the Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies
                during his first year at the school, and with the help of his friends, Harry faces an attempted comeback
                by the dark wizard Lord Voldemort, who killed Harry's parents, but failed to kill Harry when he was just
                15 months old.
            </p>
        </div>
        <a href=""><button class="btn btn-read bold-text uppercase-text color-book1">Read</button></a>
    </section>

    <section>
        <h3 class="bold-text uppercase-text">Harry Potter and the Chamber of Secrets</h3>
        <div class="vertical-block spaces">
            <img class="cover" src="https://image.ibb.co/eQrGLq/book2.jpg" alt="Harry Potter and the Chamber of Secrets">
            <p class="article-text"> The second novel in the Harry Potter series. The plot follows Harry's second year at
                Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school's
                corridors warn that the "Chamber of Secrets" has been opened and that the "heir of Slytherin" would kill
                all pupils who do not come from all-magical families. These threats are found after attacks which leave residents
                of the school "petrified" (frozen like stone). Throughout the year, Harry and his friends Ron and Hermione
                investigate the attacks.
            </p>
        </div>
        <a href=""><button class="btn btn-read bold-text uppercase-text color-book2">Read</button></a>
    </section>

    <section>
        <h3 class="bold-text uppercase-text">Harry Potter and the Prisoner of Azkaban</h3>
        <div id="info" class="vertical-block spaces">
            <img class="cover" src="https://image.ibb.co/c7VXtA/book3.jpg" alt="Harry Potter and the Prisoner of Azkaban">
            <p class="article-text"> The third in the Harry Potter series. The book follows Harry Potter, a young wizard,
                in his third year at Hogwarts School of Witchcraft and Wizardry. Along with friends Ronald Weasley and Hermione
                Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban who they believe is one of Lord
                Voldemort's old allies.
            </p>
        </div>
        <a href=""><button class="btn btn-read bold-text uppercase-text color-book3">Read</button></a>
    </section>

    <section>
        <div class="vertical-block spaces">
            <img class="avatar" src="https://image.ibb.co/bT9QDA/author.jpg" alt="Angelo Gualtieri's picture">
            <div id="names">
                <h4 class="bold-text">JK Rowling
                    </h3>
                    <h5 class="medium-text">Author
                </h4>
            </div>
        </div>
        <p class="front-block article-text bg-quote" id="biography">"Some words from <strong>JK Rowling </strong> about the books. He
            may say something interesting during the writing process or even just talk about how this book will give value
            to the readers. Some words from Angelo Gualtieri about the books. He may say something interesting during the
            writing process or even just talk about how this book will give value to the readers."</p>
        <div class="vertical-block spaces submit-form">
            <form action="">
                <label class="uppercase-text bold-text no-spaces" id="email-label" for="email">Create Your Own! </label>
                <div class="kill">
                   
                <button class="btn btn-primary btnn" style="background-color:white;color:white;width:150px;height:40px;"><a href="create-story.php" class="bottom" style="text-decoration:none;" > Create </a></button>


<style>



	.btnn{
		border: 2px solid black;
		padding: 20px 10px;
		color: black;
		cursor: pointer;
		position: relative;
		overflow: hidden;
		font-size: 24px;
		font-family: sans-serif;
		transition: all .5s;
		}

        .btnn a{
            position:absolute;
            top:-20px;  
            left:20px;
        }
	.btnn:before{
			width: 100%;
			height: 100%;
			content: '';
			margin: auto;
			position: absolute;
			top:  -100%;
			left: -100%;
			background: yellow;
			transition: all .5s;
			z-index: -1;
			
		}
	/**#btn:after{
			width: 100%;
			height: 100%;
			content: '';
			margin: auto;
			position: absolute;
			top:  100%;
			left: 100%;
			background: #212121;
			transition: all .5s;
			z-index: -1;
			
	}**/
	.btnn:hover{
		color: white;
	}
	.btnn:hover:before{			
			top: 0;
			left: 0;

	}*
	.btnn   :hover:after{
			transform: rotateY(90deg);

	}*
</style>
                
                </div>
            </form>
        </div>
        <div class="horizontal-grid">
        <label class="uppercase-text bold-text no-spaces" id="email-label" for="email">Follow us on </label>
            <a id="facebook" href="https://www.facebook.com/"><img class="contact-logo" src="https://unpkg.com/simple-icons@latest/icons/facebook.svg" alt="Facebook logo"></a>
            <a id="twitter" href="https://twitter.com/"><img class="contact-logo" src="https://unpkg.com/simple-icons@latest/icons/twitter.svg" alt="Twitter logo"></a>
            <a id="instagram" href="http://instagram.com/"><img class="contact-logo" src="https://unpkg.com/simple-icons@latest/icons/instagram.svg" alt="Instagram logo"></a>
            <a id="goodreads" href="http://www.goodreads.com/"><img class="contact-logo" src="https://unpkg.com/simple-icons@latest/icons/goodreads.svg" alt="Goodreads logo"></a>
        </div>
    </section>
</body>

</html>