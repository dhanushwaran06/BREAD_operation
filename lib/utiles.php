<?php
function getDropdownOptions($conn, $tableName, $valueColumn, $labelColumn)
{
    $option_content = '<option value="">Select Option</option>';

    $query = "SELECT $valueColumn, $labelColumn FROM $tableName";
    $result = $conn->query($query);

    if (!$result) {
        echo "Error: " . $conn->error;
        return '';
    }

    if ($result->num_rows > 0) {
        // Fetch options
        while ($row = $result->fetch_assoc()) {
            $option_content .= "<option value='{$row[$valueColumn]}'>{$row[$labelColumn]}</option>";
        }
        return $option_content;
    } else {
        return '';
    }
}
