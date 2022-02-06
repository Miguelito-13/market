<?php 

  require('../fpdf/fpdf.php');

  include('../includes/db.php');

  class PDF extends FPDF{

    function Header(){

      $this->SetFont('Arial', 'B', 15);

      $this->Cell(100,10,'Pending Orders Summary',0,1);

      $this->SetFont('Arial', 'I', 10);

      $this->Cell(24,5,'As of '.date("d-m-Y"),0,1);

      $this->Ln(5);

      $this->SetFont('Arial','B',11);

      $this->SetFillColor(0,200,255);

      $this->SetDrawColor(50,50,100);

      $this->Cell(20,5,'Order ID',1,0,'',true);

      $this->Cell(33,5,'Product Name',1,0,'',true);

      $this->Cell(33,5,'Customer Name',1,0,'',true);

      $this->Cell(23,5,'Invoice No',1,0,'',true);

      $this->Cell(20,5,'Quantity',1,0,'',true);

      $this->Cell(10,5,'Size',1,0,'',true);

      $this->Cell(24,5,'Order Date',1,0,'',true);

      $this->Cell(26,5,'Due Amount',1,1,'',true);

    }

    function Footer(){

      $this->SetY(-15);

      $this->SetFont('Arial','',8);

      $this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');

    }

  }

  $pdf = new PDF('P', 'mm', 'A4');

  $pdf->AliasNbPages('{pages}');

  $pdf->AddPage();

  $pdf->SetFont('Arial','',9);

  $pdf->SetDrawColor(50,50,100);

  $get_complete_orders = "select * from dlpp_customer_orders where order_status='Pending'";

  $run_complete_orders = mysqli_query($conn,$get_complete_orders);

  while($row_complete_orders=mysqli_fetch_array($run_complete_orders)){
                    
    $order_id = $row_complete_orders['order_id'];

    $customer_id = $row_complete_orders['customer_id'];

    $due_amount = $row_complete_orders['due_amount'];

    $invoice_no = $row_complete_orders['invoice_no'];

    $qty = $row_complete_orders['qty'];

    $size = $row_complete_orders['size'];
                    
    $order_date = $row_complete_orders['order_date'];

    $pdf->Cell(20,5,$order_id,1,0);

    $get_pro_id = "select * from dlpp_pending_orders where order_id='$order_id'";

    $run_pro_id = mysqli_query($conn,$get_pro_id);

    $row_pro_id = mysqli_fetch_array($run_pro_id);

    $product_id = $row_pro_id['product_id'];

    $get_product = "select * from dlpp_products where product_id='$product_id'";

    $run_product = mysqli_query($conn,$get_product);

    $row_product = mysqli_fetch_array($run_product);

    $product_name = $row_product['product_name'];

    $pdf->Cell(33,5,$product_name,1,0);

    $get_customer = "select * from dlpp_customer where customer_id='$customer_id'";

    $run_customer = mysqli_query($conn,$get_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $customer_name = $row_customer['customer_name'];

    $pdf->Cell(33,5,$customer_name,1,0);

    $pdf->Cell(23,5,$invoice_no,1,0);

    $pdf->Cell(20,5,$qty,1,0);

    $pdf->Cell(10,5,$size,1,0);

    $pdf->Cell(24,5,$order_date,1,0);

    $pdf->Cell(26,5,'P'.$due_amount,1,1);

  }

  $pdf->Output();

?>