<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Wise CO/PLO</title>
    <link rel="stylesheet" href="commonFacultyDashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container-faculty {
            height: 450px;
            width: 800px;
            margin-left: 400px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="faculty-menu-bar">
        <ul>
            <li><a href="instructor_dashboard.php">Home</a></li>
            <li><a href="studentWiseCoPlo.php">Student wise CO/PLO Analysis</a></li>
        </ul>
    </div>
    <div class="search-id">
        <input type="text" id="selectStudentID" name="studentId" class="id-entry" placeholder="Enter Student ID" required>
    </div>
    <div>
        <select name="courseID" class="select1" id="courseSelection">
            <option disabled selected>Select Course</option>
            <option value="CSE303">CSE472</option>
            <option value="CSE303">CSE203</option>
            <option value="CSE303">MIS341</option>
        </select>
        <button class="cse303" onclick="showCOWisePLOGraph()">View</button>
    </div>

    <div class="chart-container-faculty" id="faculty-chart-container"></div>

    <script>
        let chartObjectFaculty;

        function generateRandomData() {
            // Generates random data for CO and PLO percentages (0-100)
            const data = [];
            for (let i = 0; i < 4; i++) {
                data.push(Math.floor(Math.random() * 101));
            }
            return data;
        }

        function createGraph(courseId, studentId) {
            const ctxFaculty = document.getElementById(`FacultyChart-${courseId}-${studentId}`);
            const data = generateRandomData(); // Generate random data for CO/PLO
            new Chart(ctxFaculty, {
                type: 'bar',
                data: {
                    labels: ['CO1 PLO2', 'CO2 PLO3', 'CO3 PLO4', 'CO4 PLO6'],
                    datasets: [{
                            label: 'CO %',
                            data: data, // Random data for CO %
                            borderWidth: 1
                        },
                        {
                            label: 'PLO %',
                            data: data, // Random data for PLO %
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            max: 100,
                            min: 0
                        }
                    },
                },
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            });
            chartObjectFaculty = ctxFaculty;
        }

        function createCanvasElement(courseId, studentId) {
            const canvasWrapper = document.getElementById("faculty-chart-container");
            const canvas = document.createElement("canvas");
            canvas.setAttribute("id", `FacultyChart-${courseId}-${studentId}`);
            canvasWrapper.appendChild(canvas);
        }

        function showCOWisePLOGraph() {
            let courseId = document.getElementById("courseSelection").value;
            let studentId = document.getElementById("selectStudentID").value;
            document.getElementById("faculty-chart-container").innerHTML = "";
            createCanvasElement(courseId, studentId);

            document.getElementById("faculty-chart-container").style.backgroundColor = "#fff";
            createGraph(courseId, studentId);
        }
    </script>
</body>

</html>
