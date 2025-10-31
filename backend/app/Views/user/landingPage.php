<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafenod - Coffee House</title>
    <style>
    body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    color: #fff;
    background-color: #111; /* fallback color in case image doesn’t load */
    background-image: url('/images/coffee_landing2.jpg'); /* replace with your actual file name */
    background-size: cover; /* make image cover the whole page */
    background-repeat: no-repeat; /* prevent tiling */
    background-position: center; /* center the image */
}
 
/* Header & Footer */
header, footer {
    background-color: rgba(17,17,17,0.0);
    padding: 20px;
    text-align: center;
    font-family: 'Montserrat', sans-serif;
}
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.logo, h1, h2, h3 {
    font-family: 'Pacifico', cursive;
}
nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}
nav li {
    margin-left: 20px;
}
nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-family: 'Montserrat', sans-serif;
}


/* Buttons */
.btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 5px;
    font-weight: bold;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    font-family: 'Montserrat', sans-serif;
    box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
}
.btn-primary {
    background-color: #D2B48C;
    color: #222;
}
.btn-secondary {
    background-color: #555;
    color: #fff;
}
.btn-border {
    background-color: transparent;
    border: 2px solid #D2B48C;
    color: #D2B48C;
}
.btn-disabled {
    background-color: #444;
    color: #777;
    cursor: not-allowed;
}

/* Cards */
.cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 40px;
    
}
.card1 {
    background-color: rgba(180, 180, 180, 0.1);
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    max-width: 250px;
    box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
    font-family: 'Montserrat', sans-serif;
}
.card1 img {
    max-width: 100%;
    border-radius: 6px;
    margin-bottom: 15px;
}
.card1 h3 {
    margin: 10px 0;
    font-family: 'Pacifico', cursive;
}
.card1 p {
    font-size: 0.9em;
    color: #ccc;
}

/* CTA Section */
.cta {
    background-color: rgba(60, 60, 60, 0.4);
    text-align: center;
    padding: 50px 20px;
    margin: 40px 0;
    border-radius: 8px;
    font-family: 'Montserrat', sans-serif;
    box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
}
.cta h2 {
    font-size: 2em;
    margin-bottom: 15px;
    font-family: 'Pacifico', cursive;
}
.cta p {
    font-size: 1.1em;
    margin-bottom: 20px;
    color: #ddd;
}
/* Button Hover Effects */
.btn-primary:hover {
    background-color: #c19a6b; /* darker tan */
    color: #fff;
    box-shadow: 0px 4px 10px rgba(210, 180, 140, 0.6);
}

.btn-secondary:hover {
    background-color: #777;
    color: #fff;
    box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.4);
}

.btn-border:hover {
    background-color: #D2B48C;
    color: #222;
    box-shadow: 0px 4px 10px rgba(210, 180, 140, 0.6);
}

/* Cards */
.cards2 {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 40px;
    
}
.card2 {
    background-color: rgba(180, 180, 180, 0.1);
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    max-width: 250px;
    box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
    font-family: 'Montserrat', sans-serif;
}
.card2 img {
    max-width: 100%;
    border-radius: 6px;
    margin-bottom: 15px;
}
.card2 h3 {
    margin: 10px 0;
    font-family: 'Pacifico', cursive;
}
.card2 p {
    font-size: 0.9em;
    color: #ccc;
}

/* Cards */
.cards3 {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 40px;
    
}
.card3 {
    background-color: rgba(180, 180, 180, 0.1);
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    max-width: 250px;
    box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
    font-family: 'Montserrat', sans-serif;
}
.card3 img {
    max-width: 100%;
    border-radius: 6px;
    margin-bottom: 15px;
}
.card3 h3 {
    margin: 10px 0;
    font-family: 'Pacifico', cursive;
}
.card3 p {
    font-size: 0.9em;
    color: #ccc;
}

</style>

</head>
<body>

<?= view('components/header') ?>

<!-- <section class="hero"> -->
    <div class="hero-content">
        <h1>TIME TO DISCOVER COFFEE HOUSE</h1>
        <p>The coffee is brewed by first roasting the green coffee beans...</p>
        <a href="#" class="btn btn-primary">TESTY COFFEE</a>
        <a href="#" class="btn btn-secondary">LEARN MORE</a>
    </div>
</section>

<!-- 3 Cards -->
<div class="cards">
<?= view('components/cards/card2') ?>
<?= view('components/cards/card1') ?>
<?= view('components/cards/card3') ?>


</div>

<!-- CTA Section -->
<?= view('components/cta') ?>


<!-- Buttons Demo -->

</div>


<?= view('components/footer') ?>

</body>
</html>