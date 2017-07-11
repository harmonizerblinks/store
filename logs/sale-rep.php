<?php
    include 'connect.php';
    $c = 1;
    $item = $conn->query("SELECT * FROM items");
      $total_gain = 0; $total_sub = 0; $total_quantity = 0; $total_amount =0;
    while ($row = $item->fetch_assoc()){
      $item_name = $row['items_name'];
      $Report_gain = 0; $Report_quantity = 0; $Report_amount = 0;
      echo '<tr>
            <td>'.$c.'</td>
            <td>'.$row['item_id'].'</td>
            <td>'.$row['items_name'].'</td>';

        $Sales = $conn->query("SELECT * FROM sales where items_name = '$item_name'");
            while ($Sale = $Sales->fetch_assoc()){
                $Report_gain += $Sale['gain'];
                $Report_quantity += $Sale['quantity'];
                $Report_amount += $Sale['total_amount'];
              }
            $Report_subtotal = $Report_amount - $Report_gain;
      echo '<td>'.$Report_quantity.'</td>
            <td>'.$Report_subtotal.'</td>
            <td>'.$Report_gain.'</td>
            <td>'.$Report_amount.'</td>
            </tr>';
            $total_quantity += $Report_quantity; $total_gain += $Report_gain; $total_amount += $Report_amount; $total_sub += $Report_subtotal;
            $c++;
    }
    echo '<tr>
            <td></td>
            <td>Total </td>
            <td>'.$c.' Items</td>
            <td>'.$total_quantity.'</td>
            <td>'.$total_sub.'</td>
            <td>'.$total_gain.'</td>
            <td>'.$total_amount.'</td>
            </tr>';

    ?>
