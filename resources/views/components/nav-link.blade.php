@props(['active' => false, 'type' => 'a'])

<?php
if ($type === 'a') {
    echo '<li><a class="' . ($active ? 'bg-gray-200 text-black' : '') . ' px-2 py-1 cursor-pointer hover:scale-110 hover:text-green-500" ' . $attributes . '>' . $slot . '</a></li>';
} elseif ($type === 'b') {
    echo '<li><button class="' . ($active ? 'bg-gray-200 text-black' : '') . ' px-2 py-1 cursor-pointer hover:scale-110 hover:text-green-500" ' . $attributes . '>' . $slot . '</button></li>';
}
        ?>