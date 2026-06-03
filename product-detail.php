<?php 
include 'header.php'; 
$game = isset($_GET['game']) ? htmlspecialchars($_GET['game']) : 'freefire';

$game_titles = [
    'freefire' => 'Free Fire Diamonds',
    'pubg' => 'PUBG Mobile UC',
    'cod' => 'Call of Duty Mobile CP'
];

$packages = [
    'freefire' => ['100 Diamonds - $1.00', '210 Diamonds - $2.00', '530 Diamonds - $5.00'],
    'pubg' => ['60 UC - $0.99', '325 UC - $4.99', '660 UC - $9.99'],
    'cod' => ['80 CP - $0.99', '420 CP - $4.99', '880 CP - $9.99']
];
?>

<div class="container" style="max-width: 600px;">
    <h2>Top Up: <?php echo $game_titles[$game]; ?></h2>
    <form action="cart.php" method="POST" style="background: var(--card-bg); padding: 30px; border-radius: 8px; border: 1px solid #27272a;">
        <input type="hidden" name="game" value="<?php echo $game; ?>">
        
        <div class="form-group">
            <label for="player_id">Enter Player ID / Character ID</label>
            <input type="text" id="player_id" name="player_id" placeholder="e.g., 123456789" required>
        </div>

        <div class="form-group">
            <label for="package">Select Package</label>
            <select id="package" name="package" required>
                <?php foreach($packages[$game] as $pkg): ?>
                    <option value="<?php echo $pkg; ?>"><?php echo $pkg; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn" style="width: 100%; margin-top: 10px;">Add to Cart & Checkout</button>
    </form>
</div>

<?php include 'footer.php'; ?>
