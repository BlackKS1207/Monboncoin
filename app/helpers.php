<?php


function getBuyerName($buyer_id)
{
    $user = App\User::find($buyer_id);
    return $user->name;
}