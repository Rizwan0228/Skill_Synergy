<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Synergy</title>

    <link rel="stylesheet" href="commonStdDashboard.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: white; /* Set body background to white */
        }

        .chart-container-std-cowiseplo {
            height: 450px;
            width: 800px;
            margin-left: 400px;
            margin-bottom: 20px;
            background-color: white; /* Set chart container background to white */
        }
    </style>
</head>

<body>
    <div class="std-menu-bar">
        <ul>
            <li class="hello"><a href="student_dashboard.php">Home</a></li>
            <li><a href="coWisePlo.php">CO wise PLO Analysis</a></li>
            <li><a href="spiderChartAnalysis.php" target="_self">Spider Chart Analysis</a></li>
        </ul>
    </div>
    <div>
        <select name="courseID" class="select1" id="CSECourseSelection">
            <option disabled selected>Select Course</option>
            <option value="CSC101">CSE472</option>
            <option value="CSE203">CSE203</option>
            <option value="CSE303">MIS341</option>
        </select>
        <button class="cse303" onclick="showCOWisePLOGraph()">View</button>
    </div>

    <div class="chart-container-std-cowiseplo" id="chart-container"></div>

    <script>
        function generateRandomData() {
            // Generates random data for CO and PLO percentages (0-100)
            const data = [];
            for (let i = 0; i < 4; i++) {
                data.push(Math.floor(Math.random() * 101));
            }
            return data;
        }

        function createGraph(courseId) {
            const ctx = document.getElementById(`chart-${courseId}`).getContext('2d');
            const data = {
                labels: ['CO1 PLO2', 'CO2 PLO3', 'CO3 PLO4', 'CO4 PLO6'],
                datasets: [{
                    label: 'CO %',
                    data: generateRandomData(), // Random data for CO %
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'PLO %',
                    data: generateRandomData(), // Random data for PLO %
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            };
            const options = {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            };
            new Chart(ctx, {
                type: 'bar',
                data: data,
                options: options
            });
        }

        function createCanvasElement(courseId) {
            const canvasWrapper = document.getElementById("chart-container");
            const canvas = document.createElement("canvas");
            canvas.setAttribute("id", `chart-${courseId}`);
            canvasWrapper.appendChild(canvas);
        }

        function showCOWisePLOGraph() {
            let courseId = document.getElementById("CSECourseSelection").value;
            document.getElementById("chart-container").innerHTML = "";
            createCanvasElement(courseId);
            createGraph(courseId);
        }
    </script>
</body>

</html>
