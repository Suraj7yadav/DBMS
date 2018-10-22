
    <!DOCTYPE html>
    <html>

    <body>
        <h1>Car Trade</h1>

<hr>
            <form action="insert2.php" method="POST">
                Car Type:<br>
                <input type="text" name="type"><br><br>
                Car brand:<br>
                <input type="text" name="brand"><br><br>
                Car Model:<br>
                <input type="text" name="model"><br><br> 
                Fuel Type<br>
               <select name="ft">
                <option value="petrol">petrol</option>
                <option value="diesel">diesel</option>
                <option value="eco">Eco</option>
                </select>
                <br><br>
                Transmission Type<br>
                <select name="tt">
                <option value="auto">auto</option>
                <option value="manual">manual</option>
                </select>
                <br><br>



                <h2> Enter the details</h2>
                Car condition:<br>
                <select name="car_cond">
                <option value="old">old</option>
                <option value="new">new</option>
                </select>
                <br><br>
                Car Color:<br>
                <input type="text" name="color"><br><br>
                Registration number:<br>
                <input type="text" name="reg"><br><br>
                Year of purchase:<br>
                <input type="txt" name="year"><br><br>
                Price(₹):<br>
                <input type="text" name="price"><br><br>
                Distance Travelled:<br>
                <input type="text" name="distance"><br><br>
                





                <h2> Enter the Extra details</h2>
                Insurance Number:<br>
                <input type="text" name="ino"><br><br>
                Rto Number:<br>
                <input type="text" name="rto"><br><br>
                Emission Ratings:<br>
                <input type="txt" name="emi"><br><br>


                
                <input type="submit" value="Submit">
            </form>
            </hr>

    </html>
    </body>