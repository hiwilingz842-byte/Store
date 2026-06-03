<?php include 'header.php'; ?>

<div class="container">
    <h2 style="margin-bottom: 10px;">All Game Currencies & Services</h2>
    <p style="color: var(--text-gray); margin-bottom: 40px;">Select a game to view available top-up packages and instant delivery rates.</p>
    
    <div class="grid">
        <!-- Free Fire -->
        <div class="card">
            <div style="font-size: 40px; margin-bottom: 15px;">🔥</div>
            <h3>Free Fire Diamonds</h3>
            <p style="color: var(--text-gray); font-size: 14px; margin-bottom: 20px;">Direct region-independent top-up via Player ID.</p>
            <a href="product-detail.php?game=freefire" class="btn" style="width: 80%;">View Packages</a>
        </div>

        <!-- PUBG Mobile -->
        <div class="card">
            <div style="font-size: 40px; margin-bottom: 15px;">🪂</div>
            <h3>PUBG Mobile UC</h3>
            <p style="color: var(--text-gray); font-size: 14px; margin-bottom: 20px;">Global Unknown Cash codes and direct recharges.</p>
            <a href="product-detail.php?game=pubg" class="btn" style="width: 80%;">View Packages</a>
        </div>

        <!-- COD Mobile -->
        <div class="card">
            <div style="font-size: 40px; margin-bottom: 15px;">🪖</div>
            <h3>COD Mobile CP</h3>
            <p style="color: var(--text-gray); font-size: 14px; margin-bottom: 20px;">Garena & Global Call of Duty Points delivery.</p>
            <a href="product-detail.php?game=cod" class="btn" style="width: 80%;">View Packages</a>
        </div>
        
        <!-- Extra Service Slot -->
        <div class="card">
            <div style="font-size: 40px; margin-bottom: 15px;">🛡️</div>
            <h3>Game Pass / Gift Cards</h3>
            <p style="color: var(--text-gray); font-size: 14px; margin-bottom: 20px;">Google Play, iTunes, and Steam wallet codes.</p>
            <button class="btn" style="width: 80%; background: #3f3f46;" disabled>Coming Soon</button>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
