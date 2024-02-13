<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- Bootstrap CSS --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5"> 
    <h1>Product List</h1>
     <div class="table-responsive">
     <table class="table table-striped">
      <thead> 
      <tr>
       <th>Title </th> 
       <th>Description</th> 
       <th>Price</th>
       <th></th> 
        </tr> 
        </thead> 
        <tbody id="productList"></tbody>
     </table> 
    </div>
 </div> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script> 
// Fetch product data from the API 
fetch('https://dummyjson.com/products') 
.then(response => response.json())
 .then(data => { // Display products in table
        const productList = document.getElementById('productList');
        data.products.forEach(product => { const row = document.createElement('tr');
        row.innerHTML =     ` <td>${product.title}</td>
                            <td>${product.description}</td>
                            <td>$${product.price}</td>` ;
       productList.appendChild(row);
     });
     }) 
       
       .catch(error => { console.error('Error:', error); });
        </script>
         </body>
          </html>















2