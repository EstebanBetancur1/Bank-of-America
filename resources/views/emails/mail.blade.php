<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div style="background-color: #ffffff; padding: 0; max-width: 50rem; margin: 48px auto; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
        <div style="margin-bottom: 14px;">
           <img src="https://i.imgur.com/3cImSwD.png" alt="Bank of America" style="width: 283px; height: 30px; margin: 0 auto;">
        </div>
        <div style="margin-bottom: 10px;">
            <h1 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0px;">Payment Bank of America</h1>
            <p style="color: #6b7280;">TOTAL PAID</p>
            <p style="font-size: 1.875rem; font-weight: bold; margin-top: 0;">{{ number_format($amount, 0, '.', ',') }} USD</p> 
        </div>
        <p style="font-size: 0.875rem; color: #6b7280; margin: 24px 0;">Processing international payments may take 1-3 business days. For more information about the status of your payment, we recommend that you contact your bank directly. Once the process is complete, the balance will reflect in your Bank of America account.</p>
        <div style="border-top: 1px solid #d1d5db; padding-top: 24px; margin-top: 24px; color: #6b7280;">
            <p>Need help? <a href="tel:+573246714322" style="color: #dc2626; text-decoration: none;">Help Center</a></p>
            <p style="font-size: 0.75rem; margin-top: 16px;">
                © 2021 Bank of America. All rights reserved. 1234 Main St. Anytown, USA 12345 
                more information about the company can be found at <a href="tel:+573246714322" style="color: #dc2626; text-decoration: none;">Bank of America</a>
            </p>
        </div>
    </div>
    


</body>
</html>