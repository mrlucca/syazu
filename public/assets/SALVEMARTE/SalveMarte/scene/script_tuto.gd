
extends Node2D 

func _ready():
	pass # Replace with function body.

func _on_play_pressed():
	get_tree().change_scene("res://scene/cena_confirmar.tscn")
