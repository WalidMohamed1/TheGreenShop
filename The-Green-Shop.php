<html>
<head>
    <link rel="stylesheet" href="css/TheGreenShop.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <title>The Green Shop</title>
<!--
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
    <title>The Green Shop</title>
-->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
</head>
<body>
        <!-- Start Black Background -->
            <div class="black-back"></div>
        <!-- Black Background -->

            <!-- Start Nav -->
             <div class="nav">
                    <div class="cont1">
                            <div class="logo">
                                    <img src="images/logo1.png" width="150%">
                            </div>
                            <div class="li">
                        <ul class="links">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li class="menu">
                                <a href="#categories">Categories</a>
                                <ul class="submenu">
                                    <li><a href="#items1">Items</a></li>
                                    <li><a href="#clothes1">Clothes</a></li>
                                </ul>
                            </li>    
                            <li>
                                <a href="#contact1">Contact</a>
                            </li>
							<li>
                                <a href="registration.php"  target="_blank">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                        <div class="clearfix"></div>    
                    </div>
            </div>
                <!-- End Nav -->

            <!-- Start Home -->
                <div class="home">
                    <div class="cont">
                        <div class="content">
                            <h1>The Green Shop</h1>
							<div>
                                 <form  method="post" >
									<input type="text" name="search" placeholder="Search by name">
									<a href="search.php"><input type="submit" value="Go" name="searchbutton" ></a>
                  </form>
                  <?php include'search.php' ;?>
                  <a class="bill" href=bill.php target="_blank"><h1>Make a Bill</h1></a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Home -->

                <!-- Start About -->
                    <div class="about" id="about">
                            <div class="cont">
                                <div class="content">
                                <h2>About Us</h2>
                                <p>
                                    Only about 9% of all plastic ever made has likely been recycled with 12% of all plastic waste having
                                    been incinerated . The remaining 79% has accumulated in either landfill or the natural environment if not still in use.
                                    One million seabirds and 100,000 marine mammals die each year from plastic pollution in our oceans.
                                    In one study by the U.S. Centres for Disease Control, nearly 93% of people tested positive
                                    for BPA (a potentially harmful chemical present in plastic products).
                                    So,<span style="color:gold"><b>We are The Green Shop, A web site that collect most of the Eco-friendly products which you can
                                    use it in your daily life insted of the non-Eco freindly products that ruin our beautiful Earth.</b></span>
                                </p>
                                <h3> <center>Why Choose Us!! </center></h3>
                                <h4>Depends on our vision . . .</h4> 
                                <h5 class="h">01.Honest and Dependable</h5>
                                <p class="hh">-We put 100% Eco-friend products.</p>
                                <h5 class="m">02.We Are Always on progress</h5>
                                <p class="mm">-Our website is up to date everyday you can find new products.</p>
                                <h5 class="f">03.We Are Passionate</h5>
                                <p class="ff">-We believe in our purpose so much so we work as much as we can to achieve our objectives.</p>
                            </div>
                                
                    </div>
                                </div>
                <!-- End About -->
                        <!-- Start Categories -->
                        <div class="categories" id="categories"></div>
                        <div class="cate" id="cate">
                            <div class="cont">
                                <h3>Categories</h3>
                            </div>
                        </div>
                        <div class="items1" id="items1"></div>
                        <div class="items" id="items">
                            <div class="cont">
                                <h4>1)Items</h4>
                            </div>
                        </div>
                        <div class="products">
                            <div class="pro">
                        <div class="a1">
                            <div class="cont">
                            <h3>Reusable Coffee Cups (ID=11111)</h3>
                            </div>
                        </div>
                            
                        <div class="d1">
                            <div class="i1">
                                <div class="cont">
                                <img src="images/Reusable Coffee Cups.jpg" width="20%">
                                </div>
                            </div>
                                <div class="cont">
                                    <p>
                                        In a similar style to coffee cups you get from Starbucks and other shops, Onya’s reusable coffee cups are made out of 100% food safe silicone.
                                        They’re also made to barista’s standards, so they fit snuggly in the machine at your favourite coffee shop.
                                    </p>
                                </div>
                                
                                <div class="p1">
                                        <div class="cont">
                                        <h3>Price: 19.95$</h3>
                                      
                                </div>
                                    </div>
                                    <div class="popup">
                                        <span class="showPop">Buy It</span>
                                        <div class="popContent" id="myBuyPopup">
                                            <form method ="post" action="addcus.php" >
                                            <div class="inputField">
                                              <span style="font-size: 30px">Your name: </span><input type="text" name="n" value="" style="margin-left:28px">
                                            </div>
                                            <div class="inputField">
                                              <span style="font-size: 30px">Your id: </span><input type="text" name="i" value="">
                                            </div>
                                            <div class="inputField">
                                              <span style="font-size: 30px">The Quantity: </span><input type="number" name="q" value="" style="margin-left:7px">
                                            </div>
											<div class="inputField">
                                              <span style="font-size: 30px">Product id: </span><input type="number" name="p" value="" style="margin-left:15px">
                                            </div>
                                            <div class="bottom">
                                              
                                              <input type="submit" name="user" value="Submit Order" class="hidePop" >   
                                             </div>
                                            </form>  
                                      </div>   

                        </div>
                                </div>
                        
                        <!-- ---------------------------------------------------------------------------------- -->
            <div class="pro">
                        <div class="a2">
                                <div class="cont">
                                <h3>Wooden Sunglasses(ID=22222)</h3>
                                </div>
                            </div>
                            <div class="d2">
                                <div class="i2">
                                      <div class="cont">
                                    <img src="images/Wooden-Sunglasses.png" width="20%">
                                      </div>
                                    </div>
                                        <div class="cont">
                                          <p>
                                            There are few better ways to look good and reduce your plastic pollution than with a stylish
                                            pair of wooden sunglasses.
                                            Proof Eyewear manufactures handcrafted wooden sunglasses from sustainable materials,
                                            including FSC-certified wood, cotton-based acetate, and repurposed skateboard decks.
                                         </p>
                                        </div>
                                    
                                    <div class="p2">
                                            <div class="cont">
                                            <h3>Price: 90$</h3><br>
                                           
                                    </div>
                                        </div>
                                          <div class="add2">
                                            <div class="cont">
                                              <div class="popup">
                                                <span class="showPop">Buy It</span>
                                                <div class="popContent" id="myBuyPopup">
                                                    <form method ="post" action="addcus.php" >
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your name: </span><input type="text" name="n" value="" style="margin-left:28px">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your id: </span><input type="text" name="i" value="">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">The Quantity: </span><input type="number" name="q" value="" style="margin-left:7px">
                                                    </div>
													<div class="inputField">
                                              <span style="font-size: 30px">Product id: </span><input type="number" name="p" value="" style="margin-left:15px">
                                            </div>
                                                      <div class="bottom">
                                                        
                                                        <input type="submit" name="user" value="Submit Order" class="hidePop">   
                                                    </div>
                                                       </form>  
                                                </div>
                                              </div>
                                            </div>
                                    </div>
                            </div>
                                 
                            
</div>
                        <!-- ---------------------------------------------------------------------------------- -->
                            <div class="pro">
                        <div class="a3">
                                <div class="cont">
                                <h3>Eco Laptop (ID=33333)</h3>
                                </div>
                            </div>
                            <div class="d3">
                                <div class="i3">
                                    <div class="cont">
                                    <img src="images/Eco-Laptop-300x134.png" width="20%">
                                    </div>
                            </div>
                                    <div class="cont">
                                        <p>
                                            This environmentally friendly laptop from Iameco was manufactured while decreasing
                                            greenhouse gas emissions by 30%, re-using 70% of the material, and reducing fresh water
                                            utilization by 75%.
                                        </p>
                                    </div>
                                    
                                    <div class="p3">
                                            <div class="cont">
                                            <h3>Price: 1020$</h3><br>
                                           
                                    </div>
                                        </div>
                                  
                                        <div class="add3">
                                            <div class="cont">
                                              <div class="popup">
                                                <span class="showPop">Buy It</span>
                                                <div class="popContent" id="myBuyPopup">
                                                    <form method ="post" action="addcus.php" >
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your name: </span><input type="text" name="n" value="" style="margin-left:28px">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your id: </span><input type="text" name="i" value="">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">The Quantity: </span><input type="number" name="q" value="" style="margin-left:7px">
                                                    </div>
													<div class="inputField">
                                              <span style="font-size: 30px">Product id: </span><input type="number" name="p" value="" style="margin-left:15px">
                                            </div>
                                                      <div class="bottom">
                                                       
                                                        <input type="submit" name="user" value="Submit Order" class="hidePop">   
                                                    </div>
                                                       </form>  
                                                </div>
                                              </div>
                                            </div>
                                    </div>
                            </div>
                             
                        </div>
                        <!-- ---------------------------------------------------------------------------------- -->
                            <div class="pro">
                        <div class="a4">
                                <div class="cont">
                                <h3>Recycled Floor Mats (ID=44444)</h3>
                                </div>
                            </div>
                            <div class="d4">
                                 <div class="i4">
                                    <div class="cont">
                                    <img src="images/k1.jpeg" width="20%">
                                    </div>
                                </div>
                                    <div class="cont">
                                        <p>
                                            These floor mats are made from natural, reclaimed, or recycled rubber material.
                                            Due to their high durability, they’re great for areas such as garages, warehouses, and porches.
                                        </p>
                                    </div>
                                    
                                    <div class="p4">
                                            <div class="cont">
                                            <h3>Price: 30$</h3><br>
                                           
                                    </div>
                                        </div>
                     
                                        </div>    
                                        <div class="add4">
                                            <div class="cont">
                                              <div class="popup" >
                                                <span class="showPop">Buy It</span>
                                                <div class="popContent" id="myBuyPopup">
                                                    <form method ="post" action="addcus.php" >
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your name: </span><input type="text" name="n" value="" style="margin-left:28px">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your id: </span><input type="text" name="i" value="">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">The Quantity: </span><input type="number" name="q" value="" style="margin-left:7px">
                                                    </div>
													<div class="inputField">
                                              <span style="font-size: 30px">Product id: </span><input type="number" name="p" value="" style="margin-left:15px">
                                            </div>
                                                      <div class="bottom">
                                                   
                                                        <input type="submit" name="user" value="Submit Order" class="hidePop">   
                                             </div>
                                                </form> 
                                              </div>
                                            </div>
                                    </div>
                            </div>
                           
                     </div>
                        <!-- ---------------------------------------------------------------------------------- -->
                    <div class="pro">        
                        <div class="a5">
                                <div class="cont">
                                <h3>Biodegradable Garden Pots (ID=55555)</h3>
                                </div>
                            </div>
                            <div class="d5">
                                <div class="i5">
                                    <div class="cont">
                                    <img src="images/k2.jpeg" width="20%">
                                    </div>
                               </div>
                                    <div class="cont">
                                        <p>
                                            Help keep your garden safe from plastic and rubber pollution with these biodegradable garden pots.
                                            They’re made from recycled material and decompose in about a year.
                                        </p>
                                    </div>
                                    
                                    <div class="p5">
                                            <div class="cont">
                                            <h3>Price: 5$</h3><br>
                                            
                                    </div>
                                        </div>
                    
                                        <div class="add5">
                                            <div class="cont">
                                              <div class="popup" >
                                                <span class="showPop">Buy It</span>
                                                <div class="popContent" id="myBuyPopup">
                                                    <form method ="post" action="addcus.php" >
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your name: </span><input type="text" name="n" value="" style="margin-left:28px">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your id: </span><input type="text" name="i" value="">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">The Quantity: </span><input type="number" name="q" value="" style="margin-left:7px">
                                                    </div>
													<div class="inputField">
                                              <span style="font-size: 30px">Product id: </span><input type="number" name="p" value="" style="margin-left:15px">
                                            </div>
                                                        <div class="bottom">
                                                      
                                                        <input type="submit" name="user" value="Submit Order" class="hidePop">   
                                                        </div>
                                                   </form> 
                                                </div>
                                              </div>
                                            </div>
                                    </div>
                            </div>
                            
                        </div>
                        <!-- ---------------------------------------------------------------------------------- -->
                <div class="pro">
                        <div class="a6">
                                <div class="cont">
                                <h3>Compostable Party Plates (ID=66666)</h3>
                                </div>
                            </div>
                            <div class="d6">
                                <div class="i6">
                                    <div class="cont">
                                    <img src="images/k3.jpeg" width="20%">
                                    </div>
                                </div>    
                                    <div class="cont">
                                        <p>
                                            Just like plastic cutlery, plastic and paper plates are almost always used once and thrown away. Parties, BBQs,
                                            or school lunches can produce a lot of plastic and paper plate waste.Reduce or eliminate this waste by using
                                            compostable party plates. 
                                        </p>
                                    </div>
                                    
                                    <div class="p6">
                                            <div class="cont">
                                            <h3>Price of collection: 40$</h3><br>
                                           
                                    </div>
                                        </div>
                                        <div class="add6">
                                            <div class="cont">
                                              <div class="popup" >
                                                <span class="showPop">Buy It</span>
                                                <div class="popContent" id="myBuyPopup">
                                                    <form method ="post" action="addcus.php" >
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your name: </span><input type="text" name="n" value="" style="margin-left:28px">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your id: </span><input type="text" name="i" value="">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">The Quantity: </span><input type="number" name="q" value="" style="margin-left:7px">
                                                    </div><div class="inputField">
                                              <span style="font-size: 30px">Product id: </span><input type="number" name="p" value="" style="margin-left:15px">
                                            </div>
                                                    <div class="bottom">
                                                      
                                                        <input type="submit" name="user" value="Submit Order" class="hidePop">   
                                                     </div>
                                               </form> 
                                              </div>
                                            </div>
                                    </div>
    
                            </div>
                            
          </div>
                        <!-- ---------------------------------------------------------------------------------- -->
                    <div class="pro">
                        <div class="a7">
                                <div class="cont">
                                <h3>Recycled Sari Table Linen Collection (ID=77777)</h3>
                                </div>
                            </div>
                            <div class="d7">
                                <div class="i7">
                                    <div class="cont">
                                    <img src="images/k4.jpeg" width="20%">
                                    </div>
                                </div>   
                                    <div class="cont">
                                        <p>
                                            This table linen collection from Viva Terra is handmade in Indi
                                            a by artisans who carefully collect pieces of vintage and upcycled
                                            fabrics to create elaborate patterns and colors.
                                            Each piece is different from the next because they are each hand sewn from the scraps
                                            leftover during the process of hand making Indian saris. 
                                        </p>
                                    </div>
                                    
                                    <div class="p7">
                                            <div class="cont">
                                            <h3>Price of collection: 49$</h3><br><br><br><br><br><br><br><br><br><br><br><br>
                                           
                                    </div>
                                        </div>
                                        <div class="add7">
                                            <div class="cont">
                                              <div class="popup" >
                                                <span class="showPop">Buy It</span>
                                                <div class="popContent" id="myBuyPopup">
                                                    <form method ="post" action="addcus.php" >
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your name: </span><input type="text" name="n" value="" style="margin-left:28px">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">Your id: </span><input type="text" name="i" value="">
                                                    </div>
                                                    <div class="inputField">
                                                      <span style="font-size: 30px">The Quantity: </span><input type="number" name="q" value="" style="margin-left:7px">
                                                    </div>
													<div class="inputField">
                                              <span style="font-size: 30px">Product id: </span><input type="number" name="p" value="" style="margin-left:15px">
                                            </div>
                                                      <div class="bottom">
                                                      
                                                        <input type="submit" name="user" value="Submit Order" class="hidePop">   
                                                     </div>
                                               </form> 
                                              </div>
                                            </div>
                                    </div>
    
                            </div>
                              
                        </div>
                        <!-- ---------------------------------------------------------------------------------- -->
                            <div class="clothes1" id="clothes1"></div>
                            <div class="clothes" id="clothes">
                                <div class="cont">
                                     <h4>2)Clothes</h4>
                                </div>
                            </div>
                        <!-- ---------------------------------------------------------------------------------- -->
                            <div class="pro">
                        <div class="a8">
                                <div class="cont">
                                <h3>People Tree Clothes (ID=88888)</h3>
                                </div>
                            </div>
                            <div class="d8">
                                <div class="i8">
                                    <div class="cont">
                                    <img src="images/our-story-hero.jpg" width="20%">
                                    </div>
                            </div> 
                                    <div class="cont">
                                        <p>
                                            People Tree actively supports farmers, producers and artisans through 14 producer groups,
                                            in 6 countries. We are a part of the WFTO community and a representative of Fair Trade,
                                            this means far more than paying a fair price, we provide technical assistance for producers,
                                            so they can improve their skills, strengthen their businesses and have a positive social impact.
                                            It is a partnership between producers and traders,
                                            which aims at sustainable development for excluded and economically disadvantaged people in developing countries. 
                                        </p>
                                    </div>
                                    
                                    <div class="p8">
                                            <div class="cont">
                                            <h3>Price: 60$</h3><br><br><br><br><br><br><br>
                                            
                                    </div>
                                </div>
                                        <div class="add8">
                                          <div class="cont">
                                            <div class="popup" >
                                              <span class="showPop">Buy It<br><br><br></span>
                                              <div class="popContent" id="myBuyPopup">
                                                  <form method ="post" action="addcus.php" >
                                                  <div class="inputField">
                                                    <span style="font-size: 30px">Your name: </span><input type="text" name="n" value="" style="margin-left:28px">
                                                  </div>
                                                  <div class="inputField">
                                                    <span style="font-size: 30px">Your id: </span><input type="text" name="i" value="">
                                                  </div>
                                                  <div class="inputField">
                                                    <span style="font-size: 30px">The Quantity: </span><input type="number" name="q" value="" style="margin-left:7px">
                                                  </div>
												  <div class="inputField">
                                              <span style="font-size: 30px">Product id: </span><input type="number" name="p" value="" style="margin-left:15px">
                                            </div>
                                                    <div class="bottom">
                                                    
                                                        <input type="submit" name="" value="Submit Order" class="hidePop">   
                                                     </div>
                                              </form> 
                                            </div>
                                          </div>
                                  </div>
                            </div>

                        <!-- ---------------------------------------------------------------------------------- -->
                    <div class="pro">
                        <div class="a9">
                                <div class="cont">
                                <h3>Wool Footwear (ID=99999)</h3>
                                </div>
                            </div>
                            <div class="d9">
                                <div class="i9">
                                    <div class="cont">
                                    <img src="images/Allbirds-150x150.png" width="20%">
                                    </div>
                               </div>
                                    <div class="cont">
                                        <p>
                                            Allbirds created an innovative wool fabric made specifically for footwear.
                                            By wearing a pair of Allbirds wool shoes (which don’t look half bad) you can
                                            wear a pair of comfortable shoes from a company that found a new use for naturally
                                            existing materials, rather than relying on cheaper synthetics.
                                        </p>
                                    </div>
                                    
                                    <div class="p9">
                                            <div class="cont">
                                            <h3>Price: 110$</h3><br>
                                    
                                        </div>
     
                                        <div class="add9">
                                          <div class="cont">
                                            <div class="popup" >
                                              <span class="showPop">Buy It</span>
                                              <div class="popContent" id="myBuyPopup">
                                                  <form method ="post" action="addcus.php" >
                                                  <div class="inputField">
                                                    <span style="font-size: 30px">Your name: </span><input type="text" name="n" value="" style="margin-left:28px">
                                                  </div>                                          
                                                  <div class="inputField">
                                                    <span style="font-size: 30px">Your id: </span><input type="text" name="i" value="">
                                                  </div>
                                                  <div class="inputField">
                                                    <span style="font-size: 30px">The Quantity: </span><input type="number" name="q" value="" style="margin-left:7px">
                                                  </div>
												  <div class="inputField">
                                              <span style="font-size: 30px">Product id: </span><input type="number" name="p" value="" style="margin-left:15px">
                                            </div>
                                                    <div class="bottom">
                                                     
                                                        <input type="submit" name="user" value="Submit Order" class="hidePop" action ="The-Green-Shop">   
                                                     </div>
                                              </form> 
                                            </div>
                                          </div>
                                  </div>
                            </div>
                               
                  </div>
                </div>            
                        <!-- End Categories -->

                        <!-- Start Contact -->

                        <div class="contact1" id="contact1"></div>
                        
                        <div class="con">
                            <div class="cont">
                            <h4>Contact Us</h4>
                            </div>
                        </div>
                        <div class="con1">
                            <div class="cont">
                            <h4>You can contact us, donate anything and register in our workshop by this form .</h4>
                            </div>
                        </div>

                        <div class="main">
                            <div class="Contact">
                              <h1>Contact</h1>
                              <p>Lead The Scene, Keep it Green</p>
                              <div class="links">
                                  <a href="#" ><i class="fab fa-facebook-f"></i></a>
                                  <a href="#"><i class="fab fa-twitter"></i></a>
                                  <a href="#" ><i class="fab fa-instagram"></i></a>
                                  <a href="#" ><i class="fab fa-google"></i></a>
                              </div>
                            </div>
                            <div class="US">
                              <h1>us</h1>
                              <div class="form">
                                <form class="myform" action="index.html" method="post">
                                  <div class="inputField">
                                    <!-- <label>Name</label> -->
                                    <input type="text" name="" value="" placeholder="Name">
                                  </div>
                                  <div class="inputField">
                                    <!-- <label>Email</label> -->
                                    <input type="email" name="" value="" placeholder="Email">
                                  </div>
                                  <div class="inputField">
                                    <!-- <label>Message</label> -->
                                    <textarea placeholder="Message"></textarea>
                                  </div>
                                  <input class="sender" type="submit" name="" value="Send">
                                </form>
                              </div>
                            </div>
                          </div>
                        <!-- End Contact -->

                        <!-- Start Footer -->
                        <!-- Start Footer -->
                        <div class="foot">                    
         <div class="footer">
             <div class="cont">
                 <div class="copy">
                     <h3>Copyright &copy; 2019 | All Right Reserved</h3>
                 </div>
                 <div class="links2">
                     <a href="#" ><i class="fab fa-facebook-f"></i></a>
                     <a href="#" ><i class="fab fa-twitter"></i></a>
                     <a href="#" ><i class="fab fa-instagram"></i></a>
                     <a href="#" ><i class="fab fa-google"></i></a>
                 </div>
             </div>
         </div>
     </div>       
                        <!-- End Footer-->         
                        <script src="js/jquery-3.3.1.min.js"></script>
                        <script src="js/main.js"></script>
</body>
</html>