<!DOCTYPE html>
<html>
<head>
    <title>Rover Movement Simulator</title>
</head>
<body>
    <h1>Rover Movement Simulator</h1>
    <form action="process_rover.php" method="post">
        <div id="rover-container">
            <div class="rover">
                <h2>Rover 1</h2>
                <label for="x1">Initial X:</label>
                <input type="number" name="rovers[1][x]" id="x1" min="0" required value="0">
                <br>
                <label for="y1">Initial Y:</label>
                <input type="number" name="rovers[1][y]" id="y1" min="0" required value="0">
                <br>
                <label for="direction1">Initial Direction:</label>
                <select name="rovers[1][direction]" id="direction1" required>
                    <option value="N" selected>N</option>
                    <option value="E">E</option>
                    <option value="S">S</option>
                    <option value="W">W</option>
                </select>
                <br>
                <label for="commands1">Move Commands (comma-separated R, L, M):</label>
                <input type="text" name="rovers[1][commands]" id="commands1" pattern="[RLM,\s]*" required oninput="this.value = this.value.toUpperCase()">
                <button type="button" class="remove-rover-button">Remove Rover</button>
            </div>
        </div>
        <button type="button" id="add-rover-button">Add Rover</button>
        <br>
        <button type="submit">Simulate Movement</button>
    </form>

    <script>
        let roverCount = 1;

        function removeRover(event) {
            const roverDiv = event.target.parentNode;
            roverDiv.remove();
        }

        document.getElementById('add-rover-button').addEventListener('click', function() {
            roverCount++;

            const roverContainer = document.getElementById('rover-container');
            const roverDiv = document.createElement('div');
            roverDiv.className = 'rover';

            roverDiv.innerHTML = `
                <h2>Rover ${roverCount}</h2>
                <label for="x${roverCount}">Initial X:</label>
                <input type="number" name="rovers[${roverCount}][x]" id="x${roverCount}" min="0" required value="0">
                <br>
                <label for="y${roverCount}">Initial Y:</label>
                <input type="number" name="rovers[${roverCount}][y]" id="y${roverCount}" min="0" required value="0">
                <br>
                <label for="direction${roverCount}">Initial Direction:</label>
                <select name="rovers[${roverCount}][direction]" id="direction${roverCount}" required>
                    <option value="N" selected>N</option>
                    <option value="E">E</option>
                    <option value="S">S</option>
                    <option value="W">W</option>
                </select>
                <br>
                <label for="commands${roverCount}">Move Commands (comma-separated R, L, M):</label>
                <input type="text" name="rovers[${roverCount}][commands]" id="commands${roverCount}" pattern="[RLM,\s]*" required oninput="this.value = this.value.toUpperCase()">
                <button type="button" class="remove-rover-button">Remove Rover</button>
            `;

            roverContainer.appendChild(roverDiv);

            // Attach event listener to the new "Remove Rover" button
            roverDiv.querySelector('.remove-rover-button').addEventListener('click', removeRover);
        });

        // Attach event listener to the initial "Remove Rover" button
        document.querySelector('.remove-rover-button').addEventListener('click', removeRover);
    </script>
</body>
</html>
