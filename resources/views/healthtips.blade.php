@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: gray;
            color: #333;
            /* margin: 30px; */
        }

        h2 {
            padding: 20px;
            color:whitesmoke;
        }

        ul {
            list-style-type: disc;
            margin-bottom: 20px;
            margin-left: 30px;
        }

        li {
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .tip {
            background-color: gray;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
    <title>Health Tips</title>
</head>
<body>

<h2><u> Health Tips:</u></h2> <br>

<p>Achieving and maintaining good health involves a holistic approach that encompasses various aspects of daily life. Firstly, maintaining a balanced and nutritious diet is crucial. Focus on consuming a variety of whole foods, including fruits, vegetables, lean proteins, and whole grains. Adequate hydration is equally important, so ensure you drink plenty of water throughout the day. Regular physical activity is key to overall well-being; incorporate a mix of cardio and strength training exercises into your routine. Prioritize sufficient sleep, aiming for 7-9 hours each night, as it plays a vital role in physical and mental recovery. Additionally, managing stress through practices like meditation or deep breathing can positively impact both mental and physical health. Lastly, avoid harmful habits such as smoking and excessive alcohol consumption. Combining these health tips fosters a lifestyle conducive to long-term well-being, promoting vitality and resilience. Remember, small, consistent changes can lead to significant improvements in your health over time.:</p>

<ul>
    <li><strong>Nutritious Diet:</strong>
        <ul>
            <li>Consume a variety of whole foods, including fruits, vegetables, lean proteins, and whole grains.</li>
            <li>Incorporate healthy fats from sources like avocados, nuts, and olive oil.</li>
        </ul>
    </li>

    <li><strong>Foods to Emphasize:</strong>
        <ul>
            <li>Choose nutrient-dense options such as leafy greens, berries, and lean poultry.</li>
            <li>Include sources of omega-3 fatty acids like fatty fish (salmon, mackerel).</li>
        </ul>
    </li>

    <li><strong>Foods to Limit or Avoid:</strong>
        <ul>
            <li>Limit intake of processed foods, sugary snacks, and refined carbohydrates.</li>
            <li>Minimize trans fats found in fried and packaged foods.</li>
        </ul>
    </li>

    <li><strong>Hydration:</strong>
        <ul>
            <li>Ensure adequate water intake throughout the day for proper hydration.</li>
        </ul>
    </li>

    <li><strong>Physical Activity:</strong>
        <ul>
            <li>Incorporate a mix of cardio and strength training exercises into your routine.</li>
        </ul>
    </li>

    <li><strong>Sleep:</strong>
        <ul>
            <li>Prioritize 7-9 hours of quality sleep each night for physical and mental recovery.</li>
        </ul>
    </li>

    <li><strong>Stress Management:</strong>
        <ul>
            <li>Practice stress-reducing activities such as meditation or deep breathing.</li>
        </ul>
    </li>

    <li><strong>Habits to Avoid:</strong>
        <ul>
            <li>Quit smoking and limit alcohol consumption for overall health benefits.</li>
        </ul>
    </li>
    <li><strong>Mindful Eating:</strong>
        <ul>
            <li>Eat slowly and savor each bite; pay attention to hunger and fullness cues.</li>
            <li>Avoid distractions like TV or phones during meals for better digestion.</li>
        </ul>
    </li>

    <li><strong>Portion Control:</strong>
        <ul>
            <li>Be mindful of portion sizes to avoid overeating; use smaller plates if necessary.</li>
        </ul>
    </li>
</ul>
<div class="tip">
   <h2><u> Additional health Tips:</u></h2> <br>
    <ol>
        <li>Include colorful vegetables in your meals for a variety of nutrients.</li>
        <li>Practice portion control to avoid overeating.</li>
        <li>Limit caffeine intake, especially in the evening, for better sleep.</li>
        <li>Engage in activities you enjoy to make exercise a positive experience.</li>
        <li>Take short breaks to stretch and move, especially if you have a desk job.</li>
        <li>Choose whole grains over refined grains for added fiber and nutrients.</li>
        <li>Enjoy occasional treats in moderation to maintain a balanced approach to eating.</li>
        <li>Build a support system to help you stay motivated on your health journey.</li>
        <li>Practice good hygiene to prevent the spread of illness.</li>
        <li>Set realistic and achievable health goals to track your progress.</li>
    </ol>
</div>
<p>Combining these health tips fosters a lifestyle conducive to long-term well-being, promoting vitality and resilience. Remember, small, consistent changes can lead to significant improvements in your health over time.</p>
</body>
</html>

@endsection