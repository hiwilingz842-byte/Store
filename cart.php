<?php 
include 'header.php'; 

$game = isset($_POST['game']) ? $_POST['game'] : '';
$player_id = isset($_POST['player_id']) ? $_POST['player_id'] : '';
$package = isset($_POST['package']) ? $_POST['package'] : '';
?>

<div class="container" style="max-width: 600px; text-align: center;">
    <h2>Your Cart</h2>
    <?php if($game): ?>
        <div style="background: var(--card-bg); padding: 20px; border-radius: 8px; border: 1px solid #27272a; text-align: left; margin-bottom: 20px;">
            <p><strong>Item:</strong> <?php echo strtoupper($game); ?> Top-Up</p>
            <p><strong>Package:</strong> <?php echo htmlspecialchars($package); ?></p>
            <p><strong>Target Player ID:</strong> <span style="color: var(--primary); font-weight: bold;"><?php echo htmlspecialchars($player_id); ?></span></p>
        </div>
        <button class="btn" style="width: 100%;" onclick="alert('Integrating payment gateway...')">Proceed to Secure Payment</button>
    <?php else: ?>
        <p style="color: var(--text-gray);">Your cart is empty.</p>
        <a href="shop.php" class="btn">Go Shop</a>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
