extends Node2D



func _ready():
	$total.text = "" + str(ScriptGlobal.qtd_pontos)



func _on_voltar_pressed():
	get_tree().change_scene("res://scene/cena_inicio.tscn")
