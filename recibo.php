<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prism Receipt</title>
    <link rel="stylesheet" href="recibo/recibo.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="newImages/HomeImages/PageIcon/LogoPrincipal2.png">
      </div>
      <h1>Prism Receipt</h1>
      <!-- <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div> -->
      <div id="project">
        <div><span>PROJECT</span> Prism</div>
        <div><span>CLIENT</span> Juan Ayala</div>
        <div><span>ADDRESS</span> Cueva#1 Quebradillas</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">juan@upr.edu</a></div>
        <div><span>DATE</span> March 5, 2021</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Product</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Incredibles 2</td>
            <td class="desc">Pixar Animation Disney Movie</td>
            <td class="unit">$9.99</td>
            <td class="qty">1</td>
            <td class="total">$9.99</td>
          </tr>
          <tr>
            <td class="service">Spiderman Far From Home</td>
            <td class="desc">Marvel Studios Movie</td>
            <td class="unit">$10.99</td>
            <td class="qty">1</td>
            <td class="total">$20.98</td>
          </tr>
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">$--</td>
          </tr>
          <tr>
            <td colspan="4">TAX</td>
            <td class="total">$--</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">$--</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>