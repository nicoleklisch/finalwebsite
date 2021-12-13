<style type="text/css">
    * {
    margin: 0;
    padding: 0;
    border: 0;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

body{
    background-color: rgb(196, 150, 178);
}

.container{
    color: white;
}


header {
    text-align: right;
    background: tan;
    padding: 20px 20px;

}
nav ul li {
    display: inline;
}

nav a {
    text-decoration: none;
    color: white;
    background-color: tan;
    padding: 5px;
}

footer {
    background: tan;
    color: white;
    text-align: center;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    padding: 20px 0;
}


<header>
    <nav>
        <ul>
            <li><a href = "index.html">Home</a></li>
            <li><a href = "about.html">About Me</a></li>
            <li><a href = "portfolio.html">Portfolio</a></li>
            <li><a href = "blog.html">Blog</a></li>
            <li><a href = "contact.html">Contact Me</a></li>
        /ul>
    </nav>
</header>

<div> class="container">
	<h1>Missig Fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>
</div>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

<footer>
    <p>This page designeed by Nicole Klisch.</p>
</footer>