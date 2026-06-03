<?php include 'header.php'; ?>

<div class="container" style="max-width: 600px;">
    <h2>Get in Touch</h2>
    <p style="color: var(--text-gray); margin-bottom: 30px;">Order delay? System error? Drop us a message, and our customer response team will trace your transaction hash immediately.</p>
    
    <form action="" method="POST" style="background: var(--card-bg); padding: 30px; border-radius: 8px; border: 1px solid #27272a;">
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="name@domain.com" required>
        </div>

        <div class="form-group">
            <label for="order_id">Order ID / Transaction Reference (Optional)</label>
            <input type="text" id="order_id" name="order_id" placeholder="NX-893122">
        </div>

        <div class="form-group">
            <label for="message">Message Details</label>
            <textarea id="message" name="message" rows="5" style="width: 100%; padding: 10px; background: #27272a; border: 1px solid #3f3f46; color: white; border-radius: 5px; box-sizing: border-box; font-family: inherit;" placeholder="Describe your top-up issue..." required></textarea>
        </div>

        <button type="submit" class="btn" style="width: 100%; margin-top: 15px;">Send Support Ticket</button>
    </form>
</div>

<?php include 'footer.php'; ?>
