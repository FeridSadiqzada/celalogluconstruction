<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yeni Müraciət</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #2196f3;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
        }
        .footer {
            background: #333;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 0 0 8px 8px;
            font-size: 14px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #2196f3;
        }
        .value {
            margin-top: 5px;
            padding: 10px;
            background: white;
            border-left: 4px solid #2196f3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Yeni Müraciət</h1>
        <p>{{ config('app.name') }} - Müştəri Müraciəti</p>
    </div>
    
    <div class="content">
        <div class="field">
            <div class="label">Ad Soyad:</div>
            <div class="value">{{ $inquiry->name }}</div>
        </div>
        
        <div class="field">
            <div class="label">Telefon:</div>
            <div class="value">
                <a href="tel:{{ $inquiry->phone }}">{{ $inquiry->phone }}</a>
            </div>
        </div>
        
        @if($inquiry->email)
            <div class="field">
                <div class="label">Email:</div>
                <div class="value">
                    <a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a>
                </div>
            </div>
        @endif
        
        <div class="field">
            <div class="label">Mesaj:</div>
            <div class="value">{{ nl2br(e($inquiry->message)) }}</div>
        </div>
        
        <div class="field">
            <div class="label">Səhifə:</div>
            <div class="value">{{ $inquiry->page ?? 'Əlaqə səhifəsi' }}</div>
        </div>
        
        <div class="field">
            <div class="label">Tarix:</div>
            <div class="value">{{ $inquiry->created_at->format('d.m.Y H:i') }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>Bu email avtomatik olaraq göndərilmişdir.</p>
        <p>Müştəri ilə əlaqə saxlamaq üçün yuxarıdakı əlaqə məlumatlarından istifadə edin.</p>
    </div>
</body>
</html>