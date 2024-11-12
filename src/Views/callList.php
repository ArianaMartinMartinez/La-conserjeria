<?php
    require_once("Components/layout.php");
?>
<body>
    <?php
        require_once("Components/header.php");
    ?>

    <main>
        <table>
                <tr>
                    <th>Date</th>
                    <th>Room</th>
                    <th>Issue</th>
                    <th>Area</th>
                    <th>Id</th>
                </tr>
        <?php
            foreach($data["call"] as $call) {
                echo "
                <tr>
                <td>{$call->dateTime}</td>
                <td>{$call->room}</td>
                <td>{$call->issue}</td>
                <td>{$call->area}</td>
                <td>{$call->id}</td>
                </tr>
                ";
            }
        ?>
         </table>
    </main>

    <?php
        require_once("Components/footer.php");
    ?>
</body>
