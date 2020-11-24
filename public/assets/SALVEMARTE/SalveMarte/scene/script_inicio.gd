extends Node2D 


# Called when the node enters the scene tree for the first time.
func _ready():
	pass # Replace with function body.

func _on_INICIO_pressed():
	get_tree().change_scene("res://scene/cena_confirmar.tscn")

func _on_tutorial_pressed():
	get_tree().change_scene("res://scene/cena_tutorial.tscn")
