<?php

// کرون جاب هر 15 دقیقه یک بار تنظیم شود
foreach (scandir('demos') as $demo) {
    unlink('demos/' . $demo);
}
