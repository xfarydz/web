<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PSP PC-Shop Buying Form</title>
<style>
body {
  background-color: #D8BFD8; /* Lilac */
  font-family: Arial, sans-serif;
}

.container {
  margin: 20px auto;
  width: 80%;
}

.container table {
  width: 100%;
  border-collapse: collapse;
  background-color: #fff;
  border: 1px solid #DDA0DD; /* Medium Purple */
}

.container th, .container td {
  padding: 10px;
  border: 1px solid #DDA0DD; /* Medium Purple */
}

th {
  background-color: #DDA0DD; /* Medium Purple */
  color: white;
}

label {
  font-weight: bold;
  color: black;
}

td label {
    font-weight: bold;
    color: black;
}

input[type="submit"], input[type="reset"] {
  background-color: #DDA0DD; /* Medium Purple */
  color: white;
  padding: 15px 50px;
  border: none;
  border-radius: 5px;
  width: 200px;
  margin: 10px auto;
  display: block;
  float: left;
}

input[type="submit"]:hover, input[type="reset"]:hover {
  background-color: #FFC0CB; /* Pink */
}

.sst-tax-info {
  font-weight: bold;
  color: #DDA0DD; /* Medium Purple */
}
</style>

</head>
<body>

<div class="container">
  <table>
    <tr>
      <th colspan="5"><h1>Welcome To Penang PC-SHOP</h1></th>
    </tr>
    <tr>
      <td>
      
	   <form method="post" action="process.php">

         <table>
        <tr>
            <td>Full Name:</td>
            <td><input type="text" id="full_name" name="full_name" pattern="[A-Za-z ]+" title="Please enter only letters and whitespace" required></td>
        </tr>
         <tr>
            <td>Email:</td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
<tr>
    <td>Phone Number:</td>
    <td><input type="text" placeholder="Enter your Phone Number" name="phone" pattern="[0-9]{10}" title="Please enter numbers only in the format 012-3456789" required></td>
</tr>

        <tr>
          <td>Address:</td>
           <td><textarea id="address" name="address" rows="2" cols="30" required></textarea></td>
        </tr>

<tr>
    <td>Date:</td>
    <td><input type="date" id="date" name="date" required min="2023-12-01" max="2030-12-31"></td>
</tr>

    </table>
	  
<table align="center">
    <tr>
        <th></th>
        <th></th>
        <th>Product</th>
        <th>Price (RM)</th>
        <th>Quantity</th>
    </tr>
	
    <tr>
        <td>
            <input type="checkbox" name="item1" value="1" onchange="toggleQuantity('quantity1', this)">
        </td>
        <td>
            <img src="Bag ROG.jpg" alt="Bag ROG" class="product-image" width="100" height="100">
        </td>
        <td class="product-info">
            <label for="item1">Asus BP1500G 15.6" Laptop Bag</label>
        </td>
        <td class="product-price">
            <span>RM 270.99</span>
        </td>
        <td class="product-quantity">
            <input type="number" id="quantity1" name="quantity1" value="0" min="0" max="10" required>  
        </td>
    </tr>
			
<tr>
    <td>
        <input type="checkbox" name="item2" value="1" onchange="toggleQuantity('quantity2', this)">
    </td>
    <td>
    <img src="Controller ROG.jpg" alt="Controller ROG" class="product-image" width="100" height="100">
    </td>
    <td class="product-info">
        <label for="item2">Asus ROG Raikiri Pro</label>
    </td>
    <td class="product-price">
        <span>RM 705.16</span>
    </td>
    <td class="product-quantity">
        <input type="number" id="quantity2" name="quantity2" value="0" min="0" max="10" required> 
    </td>
</tr>
		
            <tr>
              <td>
                <input type="checkbox" name="item3" value="1" onchange="toggleQuantity('quantity3', this)">
              </td>
              <td>
              <img src="Headset ROG.jpg" alt="Headset ROG" class="product-image" width="100" height="100">
              </td>
              <td class="product-info">
                <label for="item3">Asus ROG Strix Fusion 500 Gaming Headset with Headset-to-Headset RGB</label>
              </td>
              <td class="product-price">
                <span>RM 1,409.99</span>
              </td>
              <td class="product-quantity">
                <input type="number" id="quantity3" name="quantity3" value="0" min="0" max="10" required> 
              </td>
            </tr>
			
            <tr>
              <td>
                <input type="checkbox" name="item4" value="1" onchange="toggleQuantity('quantity4', this)">
              </td>
              <td>
              <img src="Laptop ROG.jpg" alt="Laptop ROG" class="product-image" width="100" height="100">
              </td>
              <td class="product-info">
                <label for="item4">ROG Zephyrus Duo 16 GX650PY Gaming Laptop, 16"</label>
              </td>
              <td class="product-price">
                <span>RM 27,618.00</span>
              </td>
              <td class="product-quantity">
                <input type="number" id="quantity4" name="quantity4" value="0" min="0" max="10" required> 
              </td>
            </tr>
			
            <tr>
              <td>
                <input type="checkbox" name="item5" value="1" onchange="toggleQuantity('quantity5', this)">
              </td>
              <td>
              <img src="Monitor ROG.jpg" alt="Monitor ROG" class="product-image" width="100" height="100">
              </td>
              <td class="product-info">
                <label for="item5">ROG SWIFT PG65UQ ROG Swift PG65UQ Big Format Gaming Display- 65” 4K UHD (3840 x 2160)</label>
              </td>
              <td class="product-price">
                <span>RM 16,888.88</span>
              </td>
              <td class="product-quantity">
                <input type="number" id="quantity5" name="quantity5" value="0" min="0" max="10" required>  
              </td>
            </tr>
			
            <tr>
              <td>
                <input type="checkbox" name="item6" value="1" onchange="toggleQuantity('quantity6', this)">
              </td>
              <td>
              <img src="Router ROG.jpg" alt="Router ROG" class="product-image" width="100" height="100">
              </td>
              <td class="product-info">
                <label for="item6">Asus ROG Rapture GT-BE98 Pro Wireless Quad-Band Multi-Gig Gaming Router</label>
              </td>
              <td class="product-price">
                <span>RM 3,599.99</span>
              </td>
              <td class="product-quantity">
                <input type="number" id="quantity6" name="quantity6" value="0" min="0" max="10" required>  
              </td>
            </tr>

          </table><br>
<label for="paymentMethod">Payment Method:</label><br>
<input type="radio" id="cash" name="paymentMethod" value="Cash" required>
<label for="cash">Cash</label><br>
<input type="radio" id="visaMasterCard" name="paymentMethod" value="Visa / Master Card">
<label for="visaMasterCard">Visa / Master Card</label><br>
<input type="radio" id="onlineTransfer" name="paymentMethod" value="Online Transfer">
<label for="onlineTransfer">Online Transfer</label><br>

<br>


          <input type="hidden" id="includequantity1" name="includequantity1" value="0">
          <br>
          
      <p class="sst-tax-info">6% SST Sales Tax rate will be charged on computer products</p>

      <div class="center-buttons">
        <input type="reset" value="Clear" style="margin-right: 20px;">
        <input type="submit" value="Submit">
      </div>
          </div>
        </form>
      </td>
    </tr>
  </table>
</div>

<script>
function toggleQuantity(quantityId, checkbox) {
  var quantityInput = document.getElementById(quantityId);
  var includeHiddenInput = document.getElementById('include' + quantityId);
  if (!checkbox.checked) {
    quantityInput.value = 0;
    includeHiddenInput.value = 0;
  } else {
    quantityInput.value = 1;
    includeHiddenInput.value = 1;
  }
  quantityInput.disabled = !checkbox.checked;
  if (checkbox.checked) {
    quantityInput.removeAttribute('required');
  } else {
    quantityInput.setAttribute('required', 'required');
  }
}
</script>

</body>
</html>