<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>The Crown</title>
				<meta charset="utf-8">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
				<link href='http://fonts.googleapis.com/css?family=UnifrakturMaguntia' rel='stylesheet' type='text/css'>
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
				<link rel="stylesheet" type="text/css" href="engine1/style.css" />
				<script type="text/javascript" src="engine1/jquery.js"></script>
				<script type="text/javascript" src="js/lightbox.min.js"></script>
				<link rel="stylesheet" href="css/lightbox.css">
    </head>

    <body>
			<?php  error_reporting(E_ALL & ~E_NOTICE); ?>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#home"><img src="images/the-crown-icon.png" alt="The Crown" title="The Crown" /></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="color_animation" href="#home">HOME</a></li>
                            <li><a class="color_animation" href="#about_us">ABOUT US</a></li>
                            <li><a class="color_animation" href="#menus">MENUS</a></li>
                            <li><a class="color_animation" href="#best_recipe">RECIPE OF THE WEEK</a></li>
                            <li><a class="color_animation" href="#career">CAREER</a></li>
                            <li><a class="color_animation" href="#events">EVENTS</a></li>
                            <li><a class="color_animation" href="#reservation">RESERVATIONS</a></li>
                            <li><a class="color_animation" href="#contact">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <div id="home" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
										<h3 class="welcome">Welcome to</h3>
										<img src="images/the-crown-icon.png" alt="The Crown" align="center" />
                    <h2 class="top-title">The Crown</h2>
                    <h2 class="white second-title">" The Realm Of Great Cuisines "</h2>
                    <hr>
                    <p>
											<a id="reserve" href="#reservation">Reserve A Table</a>
										</p>
                </div>
            </div>
        </div>

        <!-- ============ ABOUT US ============= -->

        <section id="about_us" class="description_content">
            <div class="text-content container" style="max-width: 775px;">
                <div class="col-md-12">
                    <h1>About us</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">The Crown is a modern 21st Century inn serving wonderful food in a warm and relaxed environment.</p>
										<p class="desc-text">With low-beamed ceilings, open fires during the winter, a large garden and charming courtyard area for the summer, The Crown is the perfect place to visit all year round for food.</p>
										<p class="desc-text">The Crown retains a modern atmosphere by offering a variety of menu and service style.</p>
                </div>
            </div>
        </section>


       <!-- ============ MENUS  ============= -->


				<section id ="menus" class="description_content">
				 	<div class="clearfix"></div>
						<br>
						<div id="wowslider-container1">
							<div class="ws_images"><ul>
								<li><img src="data1/images/hereford_beef_burger.jpg" alt="Hereford Beef Burger" title="Hereford Beef Burger" id="wows1_0"/></li>
								<li><img src="data1/images/mediterranean_salad.jpg" alt="Mediterranean Salad" title="Mediterranean Salad" id="wows1_1"/></li>
								<li><img src="data1/images/roasted_fillet_of_stone_bass.jpg" alt="Roasted Fillet of Stone Bass" title="Roasted Fillet of Stone Bass" id="wows1_2"/></li>
								<li><img src="data1/images/the_crown_trifle.jpg" alt="The Crown Trifle" title="The Crown Trifle" id="wows1_3"/></li>
								<li><img src="data1/images/elk_steak.jpg" alt="Elk Steak" title="Elk Steak" id="wows1_4"/></li>
								<li><img src="data1/images/fish_and_chips.jpg" alt="jquery slider" title="Fish and Chips" id="wows1_5"/></a></li>
								<li><img src="data1/images/grilled_trout.png" alt="Grilled Trout" title="Grilled Trout" id="wows1_6"/></li>
							</ul></div>
							<div class="ws_bullets"><div>
								<a href="#" title="Hereford Beef Burger"><span><img src="data1/tooltips/hereford_beef_burger.jpg" alt="Hereford Beef Burger"/>1</span></a>
								<a href="#" title="Mediterranean Salad"><span><img src="data1/tooltips/mediterranean_salad.jpg" alt="Mediterranean Salad"/>2</span></a>
								<a href="#" title="Roasted Fillet of Stone Bass"><span><img src="data1/tooltips/roasted_fillet_of_stone_bass.jpg" alt="Roasted Fillet of Stone Bass"/>3</span></a>
								<a href="#" title="The Crown Trifle"><span><img src="data1/tooltips/the_crown_trifle.jpg" alt="The Crown Trifle"/>4</span></a>
								<a href="#" title="Elk Steak"><span><img src="data1/tooltips/elk_steak.jpg" alt="Elk Steak"/>5</span></a>
								<a href="#" title="Fish and Chips"><span><img src="data1/tooltips/fish_and_chips.jpg" alt="Fish and Chips"/>6</span></a>
								<a href="#" title="Grilled Trout"><span><img src="data1/tooltips/grilled_trout.png" alt="Grilled Trout"/>7</span></a>
							</div></div>
							<div class="ws_shadow"></div>
						</div>
						<div class="text-content container"> 
							<div class="container">
								<div class="row">
									<h1>Menus</h1>
										<div class="fa fa-cutlery fa-2x"></div>
										<p class="desc-text">Quality is top priority. While our offering naturally evolves with the seasons, Crown favourites such as the finest Battered Fish & Chips and Irish Hereford Beef Burger will always have a place on our menu. All of our food is carefully considered and responsibly sourced.</p>
										<p class="desc-text">Our Head Chef and his team are committed to delivering the highest quality dishes.</p>
											<div class="col-sm-12">
												<ul class="nav nav-pills nav-justified tabsbar" role="tablist">
													<li class="active"><a href="#lunch" role="tab" id="lunches" data-toggle="tab">LUNCH</a></li>
													<li><a href="#dinner" role="tab" data-toggle="tab" id="dinners">DINNER</a></li>
													<li><a href="#sunday-bank-hol" role="tab" data-toggle="tab" id="sunday-bank-hols">SUNDAYS/BANK HOLS</a></li>
													<li><a href="#children" role="tab" data-toggle="tab" id="childrens"> KIDS MENU</a></li>
													<li><a href="#drink" role="tab" data-toggle="tab" id="drinks"> DRINKS</a></li>
													<li><a href="#takeway" role="tab" data-toggle="tab" id="takeways"> TAKEWAYS</a></li>
												</ul>

												<!-- Tab panes -->
												<div class="tab-content">
													<!--  next div Lunch Menu-->
													<div class="tab-pane active" id="lunch">
														<div class="container"><br><br>
															<img src="images/divider-crown.png" /><br><br>
															<div class="menu-header">
																Lunch
															</div><br>
															<p>White & Rye Sourdough Bread with Lightly Salted Butter £2.95*</p><br>
															<div class="sub-menu-header">
																Starters
															</div><br>
															<p>Crispy Cauliflower Cheese £7.95*</p>
															<p>King Prawn Cocktail with Rye Bread £8.95*</p>
															<p>Trug of Vegetables with Bagna Cauda £9.95*</p>
															<p>French Onion Soup, Gruyere Cheese Crouton £7.95*</p>
															<p>Confit Potted Rabbit, Cornichons & Char-grilled Bread £8.95*</p>
															<p>Mushroom Parfait, Toasted Sourdough, Sweet & Sour Onions £8.95*</p><br>
															<div class="sub-menu-header">
																Sandwiches & Salads
															</div><br>
															<p>Smoked Chicken, Tomato Dressing £11.95</p>
															<p>Open Pastrami Sandwich, Horseradish Mayonnaise & Pickles £9.50*</p><br>
															<div class="sub-menu-header">
																Main Course
															</div><br>
															<p>Fish & Chips, Crushed Peas & Homemade Tartar Sauce £17.95*</p>
															<p>Confit Duck Leg, Mash, Braised Red Cabbage & Blackberry Sauce £19.95</p>
															<p>Roasted Fillet of Stone Bass, Spinach, Tomato, Shalllot & Rockets £21.95*</p>
															<p>Piquillo Pepper Tart with Olive Tapenade and Goats Cheese £14.50</p>
															<p>Char-grilled Irish Black Angus Flat Iron & Marrowbone Sauce, Fries £19.95</p>
															<p>Hereford Burger with Smoked Cheese, Fries £19.50</p>
															<p>‘The Crown’ Burger, Comté Cheese, Burger Sauce & Fries £17.50*</p>
															<p>‘Caldecott’ Free Range Turkey, Seasonal Garnish, Roast Turkey Gravy £23.00*</p><br>
															<div class="sub-menu-header">
																Special Recipe Of The Week
															</div><br>
															<p>Crackin' crab briks £9.95*</p><br>
															<div class="sub-menu-header">
																Sides £3.95	
															</div><br>
															<p>Roast Potatoes | Sprouts & Lamb Bacon | Braised Red Cabbage | Fries</p>
															<p>Glazed Carrots | Green Salad | Honey & Thyme Roast Parsnips</p><br>
															<div class="sub-menu-header">
																Desserts	
															</div><br>
															<p>‘The Crown’ Trifle £7.95*</p>
															<p>Yule Log, Pine Essence, Chocolate Bark £8.50*</p>
															<p>Chocolate Parfait Honeycomb & Chocolate Oil £7.50*</p>
															<p>ticky Toffee Pudding, Vanilla Ice Cream £6.95*</p><br><br>
															<p style="font-style: italic; font-size: 12px;">*Contains traces of nuts</p>
															<p style="font-style: italic; font-size: 12px;">**All our fish is from sustainable sources</p>
															<p style="font-style: italic; font-size: 12px;">**All of our dishes are cooked to order. Thank you for being patient during busy periods. Please make us aware of any allergies, and ask for further details of dishes that contain allergens.</p><br>
															<img src="images/divider-crown.png" /><br><br>
														</div>
													</div>
													<!--next div Dinner Menu-->
													<div class="tab-pane" id="dinner">
														<div class="container"><br><br>
															<img src="images/divider-crown.png" /><br><br>
															<div class="menu-header">
																Dinner
															</div><br>
															<p>White & Rye Sourdough Bread with Lightly Salted Butter £2.95*</p><br>
															<div class="sub-menu-header">
																Starters
															</div><br>
															<p>Crispy Cauliflower Cheese £7.95*</p>
															<p>King Prawn Cocktail with Rye Bread £8.95*</p>
															<p>Trug of Vegetables with Bagna Cauda £9.95*</p>
															<p>French Onion Soup, Gruyere Cheese Crouton £7.95*</p>
															<p>Confit Potted Rabbit, Cornichons & Char-grilled Bread £8.95*</p>
															<p>Mushroom Parfait, Toasted Sourdough, Sweet & Sour Onions £8.95*</p><br>
															<div class="sub-menu-header">
																Main Course
															</div><br>
															<p>Fish & Chips, Crushed Peas & Homemade Tartar Sauce £17.95*</p>
															<p>Confit Duck Leg, Mash, Braised Red Cabbage & Blackberry Sauce £19.95</p>
															<p>Roasted Fillet of Stone Bass, Spinach, Tomato, Shalllot & Rockets £21.95*</p>
															<p>Piquillo Pepper Tart with Olive Tapenade and Goats Cheese £14.50</p>
															<p>Char-grilled Irish Black Angus Flat Iron & Marrowbone Sauce, Fries £19.95</p>
															<p>Hereford Burger with Smoked Cheese, Fries £19.50</p>
															<p>‘The Crown’ Burger, Comté Cheese, Burger Sauce & Fries £17.50*</p>
															<p>‘Caldecott’ Free Range Turkey, Seasonal Garnish, Roast Turkey Gravy £23.00 *</p><br>
															<div class="sub-menu-header">
																Special Recipe Of The Week
															</div><br>
															<p>Crackin' crab briks £9.95*</p><br>
															<div class="sub-menu-header">
																Sides £3.95	
															</div><br>
															<p>Roast Potatoes | Sprouts & Lamb Bacon | Braised Red Cabbage | Fries</p>
															<p>Glazed Carrots | Green Salad | Honey & Thyme Roast Parsnips</p><br>
															<div class="sub-menu-header">
																Desserts	
															</div><br>
															<p>‘The Crown’ Trifle £7.95*</p>
															<p>Yule Log, Pine Essence, Chocolate Bark £8.50*</p>
															<p>Chocolate Parfait Honeycomb & Chocolate Oil £7.50*</p>
															<p>ticky Toffee Pudding, Vanilla Ice Cream £6.95*</p><br><br>
															<p style="font-style: italic; font-size: 12px;">*Contains traces of nuts</p>
															<p style="font-style: italic; font-size: 12px;">**All our fish is from sustainable sources</p>
															<p style="font-style: italic; font-size: 12px;">**All of our dishes are cooked to order. Thank you for being patient during busy periods. Please make us aware of any allergies, and ask for further details of dishes that contain allergens.</p><br>
															<img src="images/divider-crown.png" /><br><br>
														</div>
													</div>
													<!--next div Sundays-Bank-Hols Menu-->
													<div class="tab-pane" id="sunday-bank-hol">
														<div class="container"><br><br>
															<img src="images/divider-crown.png" /><br><br>
															<div class="menu-header">
																Sundays/Bank Holidays
															</div><br>
															<p>White & Rye Sourdough Bread with Lightly Salted Butter £2.95*</p><br>
															<div class="sub-menu-header">
																Starters
															</div><br>
															<p>Crispy Cauliflower Cheese £7.95*</p>
															<p>King Prawn Cocktail with Rye Bread £8.95*</p>
															<p>Trug of Vegetables with Bagna Cauda £9.95*</p>
															<p>French Onion Soup, Gruyere Cheese Crouton £7.95*</p>
															<p>Confit Potted Rabbit, Cornichons & Char-grilled Bread £8.95*</p>
															<p>Mushroom Parfait, Toasted Sourdough, Sweet & Sour Onions £8.95*</p><br>
															<div class="sub-menu-header">
																Salads
															</div><br>
															<p>Hearts of palm & chicken chopped salad with zingy lime, mango, avo & feta £10.95*</p><br>
															<div class="sub-menu-header">
																Main Course
															</div><br>
															<p>Fish & Chips, Crushed Peas & Homemade Tartar Sauce £17.95*</p>
															<p>Confit Duck Leg, Mash, Braised Red Cabbage & Blackberry Sauce £19.95</p>
															<p>Roasted Fillet of Stone Bass, Spinach, Tomato, Shalllot & Rockets £21.95*</p>
															<p>Piquillo Pepper Tart with Olive Tapenade and Goats Cheese £14.50</p>
															<p>Char-grilled Irish Black Angus Flat Iron & Marrowbone Sauce, Fries £19.95</p>
															<p>Hereford Burger with Smoked Cheese, Fries £19.50</p>
															<p>‘The Crown’ Burger, Comté Cheese, Burger Sauce & Fries £17.50*</p>
															<p>‘Caldecott’ Free Range Turkey, Seasonal Garnish, Roast Turkey Gravy £23.00 *</p><br>
															<div class="sub-menu-header">
																Special Recipe Of The Week
															</div><br>
															<p>Crackin' crab briks £9.95*</p><br>
															<div class="sub-menu-header">
																Sides £3.95	
															</div><br>
															<p>Roast Potatoes | Sprouts & Lamb Bacon | Braised Red Cabbage | Fries</p>
															<p>Glazed Carrots | Green Salad | Honey & Thyme Roast Parsnips</p><br>
															<div class="sub-menu-header">
																Desserts	
															</div><br>
															<p>‘The Crown’ Trifle £7.95*</p>
															<p>Yule Log, Pine Essence, Chocolate Bark £8.50*</p>
															<p>Chocolate Parfait Honeycomb & Chocolate Oil £7.50*</p>
															<p>ticky Toffee Pudding, Vanilla Ice Cream £6.95*</p><br><br>
															<p style="font-style: italic; font-size: 12px;">*Contains traces of nuts</p>
															<p style="font-style: italic; font-size: 12px;">**All our fish is from sustainable sources</p>
															<p style="font-style: italic; font-size: 12px;">**All of our dishes are cooked to order. Thank you for being patient during busy periods. Please make us aware of any allergies, and ask for further details of dishes that contain allergens.</p><br>
															<img src="images/divider-crown.png" /><br><br>
														</div>
													</div>
													<!--next div Kids Menu-->
													<div class="tab-pane" id="children">
														<div class="container"><br><br>
															<img src="images/divider-crown.png" /><br><br>
															<div class="menu-header">
																Kids Menu
															</div><br>
															<div class="sub-menu-header">
																Main Course
															</div><br>
															<p>Tomato & Chicken Pasta £7.50</p>
															<p>Cheeseburger & Fries £7.95*</p>
															<p>Fish & Chips, Crushed Peas £7.50*</p><br>
															<div class="sub-menu-header">
																Ice Cream
															</div><br>
															<p>Vanilla</p>
															<p>Salted Caramel</p>
															<p>Roasted Hazelnut</p>
															<p>Blackcurrant Sorbet</p>
															<p>2 Scoops £3.50</p>
															<p>3 Scoops £5.50</p><br>
															<div class="sub-menu-header"; style="font-style: italic";>
																Sunday Specials
															</div><br>
															<div class="sub-menu-header">
																Main Course
															</div><br>
															<p>Tomato & Chicken Pasta £7.50</p>
															<p>Cheeseburger & Fries £7.95*</p>
															<p>Fish & Chips, Crushed Peas £7.50*</p>
															<p>Roast Beef, Potatoes, Yorkshire Pudding, Seasonal Vegetables & Gravy £10.50</p><br>
															<div class="sub-menu-header">
																Ice Cream
															</div><br>
															<p>Vanilla</p>
															<p>Salted Caramel</p>
															<p>Roasted Hazelnut</p>
															<p>Blackcurrant Sorbet</p>
															<p>2 Scoops £3.50</p>
															<p>3 Scoops £5.50</p><br><br>
															<p style="font-style: italic; font-size: 12px;">*Contains traces of nuts</p>
															<p style="font-style: italic; font-size: 12px;">**All our fish is from sustainable sources</p>
															<p style="font-style: italic; font-size: 12px;">**All of our dishes are cooked to order. Thank you for being patient during busy periods. Please make us aware of any allergies, and ask for further details of dishes that contain allergens.</p><br>
															<img src="images/divider-crown.png" /><br><br>
														</div>
													</div>
													<!--next div Drinks Menu-->
													<div class="tab-pane" id="drink">
														<div class="container"><br><br>
															<img src="images/divider-crown.png" /><br><br>
															<div class="menu-header">
																Drinks
															</div><br>
															<p>Our drinks list is carefully selected, offering a good mix of fruit and vegetable varieties by region and country and an ever-changing selection of specials.</p>
															<p>Our staff is always on hand and happy to help you choose a drink that will complement your meal.</p><br>
															<div class="sub-menu-header">
																Selections
															</div><br>
															<p>Freshly squeezed juices from £1.50*</p>
															<p>Blitz up fruit and veg from £2.50*</p>
															<p>Freshly ground coffee £1.50*</p>
															<p>Pure spring water £1*</p><br><br>
															<p style="font-style: italic; font-size: 12px;">**Please make us aware if you have allergies we should be aware of. Some drinks may contain milk or may not be suitable for customers.</p><br>
															<img src="images/divider-crown.png" /><br><br>
														</div>
													</div>
													<!--next div Takeway Menu-->
													<div class="tab-pane" id="takeway">
														<div class="container"><br><br>
															<img src="images/divider-crown.png" /><br><br>
															<div class="menu-header">
																Takeways
															</div><br>
															<p>To enjoy your takeaway food at its best, we suggest that you leave it no longer than 10 minutes after pick up.</p>
															<p>Our Fish & Chips and Burgers are available to take away Monday through Thursday, 12:00-14:00 and 18:00-21:00.</p><br>
															<div class="sub-menu-header">
																Selections
															</div><br>
															<p>‘The Crown’ Burger, Comté Cheese, Burger Sauce & Fries £17.50</p>
															<p>Pastrami & Smoked Cheese Burger, Mustard, Pickles & Fries £19.50</p>
															<p>Fish & Chips, Crushed Peas & Homemade Tartar Sauce £17.95</p><br><br>
															<p style="font-style: italic; font-size: 12px;">**Minimum order £17.50; Delivery Charge £5.00; Last orders are 5 minutes before the restaurant closes.</p><br>
															<img src="images/divider-crown.png" /><br><br>
														</div>
													</div>
												</div>
											</div>
								</div>	
							</div>
						</div>
						<div id="w">
								
						</div><!-- @end #w -->
				</section>


        <!-- ============ RECIPE OF THE WEEK ============= -->


        <section id ="best_recipe" class="description_content">
					<div  class="recipe background_content">
					</div>
					<div class="text-content container" style="max-width: 2000px;"> 
							<div class="col-md-12">
									<h1>RECIPE OF THE WEEK</h1>
									<div class="fa fa-cutlery fa-2x"></div>
									<p class="desc-text">Here at The Crown we’re all about the love of new food. We thought we’d celebrate with a fresh, new Food.</p>
									<p class="desc-text">Our aim is to make all this cooking, eating and sharing easier.</p> 
									<p class="desc-text">Whether it’s finding a recipe, showing off your latest cooking triumph, photographing a killer meal or sharing the shortcuts that make your life run more smoothly, your home for sharing all things food – the spot to be.</p> 
									<p class="desc-text">Each week we select one best recipe among so many and put it on our menu for a limited time period.</p> 
									<p class="desc-text">The best recipe winner gets an amazing prize of free dinner for 2.</p> 
									<p class="desc-text">If you think what it takes to be the winner, then hurry and share your recipe now.</p>
							</div>
							
					</div>
        </section>


       <!-- ============ CAREER  ============= -->

        <section id="career" class=" description_content">
					<div class="clearfix"></div>
						<br>
						<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="images/career1.jpg" alt="Career1" />
								</div>

								<div class="item">
									<img src="images/career2.jpg" alt="Career1" />
								</div>
							</div>
						</div>
					
					<div class="text-content container"> 
							<div class="col-md-12">
									<h1>CAREER</h1>
									<div class="fa fa-cutlery fa-2x"></div>
									<p class="desc-text">Here at The Crown, we are constantly on the search for enthusiastic individuals who are looking to work in the hospitality industry.</p>
									<p class="desc-text">If you feel that you would like to become part of our Crown family or would like to enquire about what positions we have available, please contact <a href="mailto:the.restaurant.crown@gmail.com.">the.restaurant.crown@gmail.com.</a>with the job title in the ‘subject’ line.</p>
									<p class="desc-text">The roles we are currently recruiting for are;</p>
									<h3></h3>
									<div class="sub-menu-header">
										FRONT OF HOUSE VACANCIES
									</div><br>
									<div class="sub-menu-header">
										WAITING STAFF
									</div><br>
									<p class="desc-text">We are looking for a few friendly and efficient Waiters for a full time role here at The Crown restaurant.  We have a mixture of local regulars and those who have travelled specially to visit our restaurant and we ensure that everyone though the door has an enjoyable experience with us. If that’s sounds like a role you would excel in, please apply asap.</p>
									
							</div>
					</div>
        </section>

        
        <!-- ============ EVENTS  ============= -->

        <section id="events" class="description_content">
            <div  class="featured background_content">
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>EVENTS</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">We love creating new experiences and if there is such a word as Wonderosity, then this is the feeling we want our guests to have at the end, beginning and middle of their time with us. We cater various events here at The Crown. Our events team are here to guide you through - carefully planning your story from the first page to the very end. So, if you are sitting comfortably, then let us begin...</p>
                </div>
                <div class="col-md-6">
                  <div class="col col-md-14 push-down-sm">
										<div class="thumbnails">
											<a href="images/lg/Wedding Ceremony.jpg" data-title="Wedding ceremony organised on 17 July 2016" data-lightbox="Events">
												<img src="images/tn/Wedding Ceremony.jpg" alt="Islamic Event" />
											</a>
											<a href="images/lg/Kids Party.jpg" data-title="Kids party organised on 1 August 2016" data-lightbox="Events">
												<img src="images/tn/Kids Party.jpg" alt="Islamic Event" />
											</a>
											<a href="images/lg/Islamic Charity Event.jpg" data-title="Islamic charity event organised on 25 September 2016" data-lightbox="Events">
												<img src="images/tn/Islamic Charity Event.jpg" alt="Islamic Event" />
											</a>
											<a href="images/lg/Ramadan Iftar Party.jpg" data-title="Ramadan Iftar party organised on 20 June 2016" data-lightbox="Events">
												<img src="images/tn/Ramadan Iftar Party.jpg" alt="Islamic Event" />
											</a>
											<a href="images/lg/Feed The Poor Week.jpg" data-title="Feed the poor week organised on 30 November 2016" data-lightbox="Events">
												<img src="images/tn/Feed The Poor Week.jpg" alt="Islamic Event" />
											</a>
											<a href="images/lg/Graduation Ceremony.jpg" data-title="Graduation ceremony dinner organised on 3 December 2016" data-lightbox="Events">
												<img src="images/tn/Graduation Ceremony.jpg" alt="Islamic Event" />
											</a>
										</div>
									</div>  
                </div>
            </div>
        </section>

        <!-- ============ RESERVATIONS  ============= -->

        <section  id="reservation"  class="description_content">
            <div class="reservations background_content">
            </div>
            <div class="text-content container">
							<div class="desc-text">
										<h1>RESERVATIONS</h1>
										<div class="fa fa-cutlery fa-2x"></div>
										<p class="desc-text">Please fill out and send us the form to confirm your reservation here at The Crown.</p>
									</div>
                <div class="inner contact">
									
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="reserve.php">
                            <!-- Left Inputs -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- First Name -->
                                                <input type="text" name="first_name" id="first_name" required="required" class="form" placeholder="First Name" />
																								<!-- Last Name -->
                                                <input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Last Name" />
																								<!-- Guest Number -->
                                                <input type="number" name="guest_number" id="guest_number" min="0" max="200" required="required" class="form" placeholder="Guest Number" />
																								<!-- Date -->
                                                <input type="date" name="reservation_date" id="reservation_date" required="required" class="form" placeholder="Date" />
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Phone -->
																								<input type="tel" name="phone" id="phone" required="required" class="form" pattern="[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}" title="Phone Number (Format: +99(99)9999-9999)" placeholder="Phone" /> 
                                                <!--input type="text" name="phone" id="phone" required="required" class="form" placeholder="Phone" /-->
																								<!-- Email -->
                                                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
																								<!-- Message -->
                                                <textarea name="message" id="message" class="form textarea"  placeholder="Message" required="required"></textarea> 
                                            </div>

                                            <div class="col-xs-6 ">
                                                <!-- Send Button -->
                                                <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Reserve</button> 
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                        <!-- Message -->
                                        <div class="right-text">
                                            <h2>Opening Hours</h2><hr>
                                            <p>Monday: 11:30 - 23:30</p>
                                            <p>Tuesday: 11:30 - 23:30</p>
                                            <p>Wednesday: 11:30 - 23:30</p>
                                            <p>Thursday: 11:30 - 23:30</p>
                                            <p>Friday: 11:30 - 23:30</p>
                                            <p>Saturday & Sunday: 11:30 - 22:30</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->
            </div>
        </section>

        <!-- ============ CONTACT ============= -->

        <section id="contact" class="description_content">
            <div class="contacts background_content">   
            </div> 
            <div class="text-content container">
                <div class="row">
									<div class="desc-text">
											<h1>CONTACT</h1>
											<div class="fa fa-cutlery fa-2x"></div>
											<p style='line-height: 30px'>
												<img src='images/icon-phone.png' style='vertical-align: middle' />&nbsp;&nbsp;&nbsp;020-3858-2593
											</p><br>
											<p style='line-height: 30px'>
												<img src='images/icon-email.png' style='vertical-align: middle' />&nbsp;&nbsp;&nbsp;the.restaurant.crown@gmail.com
											</p>
									</div>
									<div class="inner contact">
											<!-- Form Area -->
											<div class="contact-form">
													<!-- Form -->
													<form id="contact-us" method="post" action="contact.php" onSubmit = "return validate(this)">
															<!-- Left Inputs -->
															<div class="col-md-6 ">
																	<!-- First Name -->
																	<input type="text" name="first_name" id="first_name" required="required" class="form" placeholder="First Name" />
																	<!-- Last Name -->
																	<input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Last Name" />
																	<!-- Subject -->
																	<input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
															</div><!-- End Left Inputs -->
															<!-- Right Inputs -->
															<div class="col-md-6">
																	<!-- Email -->
																	<input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
																	<!-- Message -->
																	<textarea name="message" id="message" class="form textarea"  placeholder="Message" required="required"></textarea>
															</div><!-- End Right Inputs -->
															<!-- Bottom Submit -->
															<div class="relative fullwidth col-xs-12">
																	<!-- Send Button -->
																	<button type="submit" id="submit" name="submit" class="form-btn">Send Message</button> 
															</div><!-- End Bottom Submit -->
															<!-- Clear -->
															<div class="clear"></div>
													</form>
											</div><!-- End Contact Form Area -->
									</div><!-- End Inner -->
                </div>
            </div>
						<br><br><br>
						</section>
						<section class="section_map">
								<div class="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.5608569683063!2d-1.9293365841964534!3d52.41463467979422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870be61f9e8f68d%3A0x38dc13e4dc9e4c6d!2s3+Sovereign+Rd%2C+Birmingham+B30!5e0!3m2!1sen!2suk!4v1480955530841" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
									</iframe>
								</div>
						</section>

          <!-- ============ Footer Section  ============= -->
      
						<div class="footer">
							<div class="container">
								<div class="row">
									<div class="col-md-3 widget">
										<h2>Visit Us</h2>
											<article class="widget_content">
													<p class="sub-footer-text">3 Sovereign Rd,<br> Birmingham B30<br>Phone:020-3858-2593<br>Email:the.restaurant.crown@gmail.com<br>Location: <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.5608569683063!2d-1.9293365841964534!3d52.41463467979422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870be61f9e8f68d%3A0x38dc13e4dc9e4c6d!2s3+Sovereign+Rd%2C+Birmingham+B30!5e0!3m2!1sen!2suk!4v1480955530841" target="_blank">View on Google Maps</a></p>
											</article>	
									</div>
									
									<div class="col-md-3 widget">
										<h2>Social Media</h2>
											<article class="widget_content">
													<div class="social-media">
															<a href="https://www.facebook.com/thecrownrestaurant/" target="_blank">
                                        <img src="images/facebook.png" alt="Facebook">
                                    </a>&nbsp
															<a href="https://twitter.com/the_crown_uk" target="_blank">
                                        <img src="images/twitter.png" alt="Twitter">
                                    </a>&nbsp
															<a href="https://www.linkedin.com/in/the-crown-uk" target="_blank">
                                        <img src="images/linkedin.png" alt="Linkedin">
                                    </a>
													</div>
											</article>
									</div>
									
									<div class="col-md-3 widget">
										<h2>Certification</h2>
											<article class="widget_content">
													<div class="social-media">
															<a class="color_animation" href="http://halalfoodauthority.com/" target="_blank"><img src="images/halal.png" alt="halal certification"/></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
															<a class="color_animation" href="http://www.fatimabrand.com/" target="_blank"><img src="images/zabiha-halal-meat.png" alt="halal certification"/></a>&nbsp
													</div>
											</article>
										</div>
										
										<div class="col-md-3 widget">
									<h2>Useful Info</h2>
									<article class="widget_content">
											<ul style="list-style-type:none; padding:0px;">
												<li><p class="sub-footer-text"><a href="#">Privacy Policy</a></p></li>
												<li><p class="sub-footer-text"><a href="#">Terms of use</a></p></li>
												<li><p class="sub-footer-text"><a href="#">Accessibility</a></p></li>
												<li><p class="sub-footer-text"><a href="#">FAQ</a></p></li>
											</ul>
									</article>
								</div>
								
							</div>
						</div>
						<br>
						<div class="footer-bottom">
							<div class="container">
							
								<div class="row">
									<div class="col-md-4"><p class="sub-footer-text" style="line-height: 70px">© The Crown 2016 All Rights Reserved</p></div>
									<div class="col-md-1"></div>
									
									<div class="col-md-2"><a class="navbar-brand" href="#home"><p style="line-height: 30px"><img src="images/the-crown-icon.png" alt="The Crown" title="The Crown" style="vertical-align: middle" /></p></a></div>
									

									<div class="col-md-1"></div>
									<div class="col-md-4"><p class="sub-footer-text" style="line-height: 30px">Branding And Digital By <a href="http://www.dexterouss.yolasite.com" target="_blank"><img src="images/dexterous.png" alt="The Crown" title="The Crown" style="vertical-align: middle" /></a></p></div>
									
								</div>
							</div>
						</div>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>
				<script type="text/javascript" src="engine1/wowslider.js"></script>
				<script type="text/javascript" src="engine1/script.js"></script>
				
				<script>
					function validate(form){
						var first_name= form.first_name.value;
						if (!/^[A-Za-z]+$/.test(first_name)){alert("Only letters are allowed for first name!"); return false;}

						var last_name = form.last_name.value;
						if (!/^[A-Za-z]+$/.test(last_name)){alert("Only letters are allowed for last name!"); return false;}

						var guest = form.guest.value;
						if(!/^[0-9]+$/.test(guest)){alert("Please only enter numeric characters only for guest number!!"); return false;}

						var phone= form.phone.value;
						if(!/^[0-9]+$/.test(phone)){alert("Please only enter numeric characters only for phone number!!"); return false;}
					}
				</script>
    </body>
</html>