<?php
$tasks = [
    ["name" => "Design UI", "status" => "Pending"],
    ["name" => "Setup DB", "status" => "Pending"],
    ["name" => "Write Docs", "status" => "Pending"]
];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task List Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .table-cell {
        border: 1px solid #d1d5db;
        padding: 0.5rem 1rem;
        text-align: left;
      }
      .table-row:nth-child(odd) {
        background-color: white;
      }
      .table-row:nth-child(even) {
        background-color: #f7fafc;
      }
    </style>
  </head>
  <body class="bg-gray-50 p-10">
    <table class="min-w-[400px] border border-gray-300 mx-auto mt-8 text-left text-sm">
      <thead>
        <tr class="bg-gray-200">
          <th class="table-cell">#</th>
          <th class="table-cell">Task</th>
          <th class="table-cell">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($tasks as $i => $task): ?>
          <tr class="table-row">
            <td class="table-cell"><?= $i + 1 ?></td>
            <td class="table-cell"><?= $task['name'] ?></td>
            <td class="table-cell"><?= $task['status'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
