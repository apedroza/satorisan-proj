<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>

		<title>DATA DESIGN PROJ</title>

	</head>
	<body>
		<header>
			<h1 class="foo-heading">Persona for Satorisan Data Design</h1>
		</header>
		<ul>
			<li>Name: Frank Deer</li>
			<li>Age: 25</li>
			<li>Gender: Male</li>
			<li>Profession: Automotive Sales</li>
			<li>Technology: Has a Samsung Galaxy 6 Android phone and uses Windows 10 at work and at home both on a Dell laptop</li>
			<li>Needs: Frank is a young salesman that wants to stay up to date with the newest shoe trends.</li>
			<li>Goals: Frank uses Satorisan to do some of his online shoe shopping </li>
		</ul>

		<img src="images/youngcarsales.jpg" alt="carsales">

			<h2 class="foo-heading">Use and Case</h2>

		<p id="description">Frank has a lot of down time at his job, so he spends a large amount of time on his phone and
			work laptop to browse and shop on the web. Today is no exception so he decides log into his laptop and begin looking
			for a new pair of shoes on satorisan.com.  </p>

			<h2 class="foo-heading">Interaction Flow</h2>
		<ol>
			<li>Frank logs into his computer</li>
			<li>He proceeds to get onto Satorisan.com</li>
			<li>He places the cursor over "men" then clicks on "casual"</li>
			<li>A list of shoes along with their pictures are displayed</li>
			<li>After browsing through this page he locates the "Heisei" "Napa Dark Brown" pair and clicks on them</li>
			<li>Frank continues to click on the "size" drop down arrow and clicks on size "43"</li>
			<li>He then proceeds by clicking "add to cart"</li>
			<li>He then clicks "confirm order" twice</li>
			<li>Finally he finishes up by adding his payment information</li>
		</ol>

			<h2 class="foo-heading">ERD</h2>

		<img src="images/satorisan.svg" alt="satorisan">

			<h2 class="foo-heading">Conceptual Model</h2>
		<h3 class="foo-heading"><u>Customer</u></h3>
		<ul>
			<li>profileId</li>
			<li>profileEmail</li>
			<li>profileAddress</li>
			<li>profilePhone</li>
			<li>profileGender</li>
		</ul>
		<h3 class="foo-heading"><u>Shoe</u></h3>
		<ul>
			<li>shoeId</li>
			<li>shoeProfileId</li>
			<li>shoeColor</li>
			<li>shoeSize</li>
			<li>shoePrice</li>
		</ul>
		<h3 class="foo-heading"><u>Cart</u></h3>
		<ul>
			<li>cartProfileId (foreign key) </li>
			<li>cartShoeId (foreign key)</li>
			<li>totalPrice</li>
			<li>orderId</li>
		</ul>
		<h3 class="foo-heading"><u>Relations</u></h3>
		<ul>
			<li>One profileId can have one orderId</li>
			<li>Many shoeId can be on many orderId</li>
		</ul>
	</body>
</html>