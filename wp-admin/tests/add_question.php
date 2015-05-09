<?php require('header.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method="POST" action="add_question_act.php?testid=<?php echo $_GET['testid']; ?>">
	<p><span lang="ru">Вопрос:</span></p>
	<p><textarea rows="7" name="question" cols="78"></textarea></p>
	<hr>
	<p><b><span lang="ru">Варианты ответа:</span></b></p>
	<blockquote>
		<hr>
		<p><span lang="ru"><font size="2">Можно выбрать:</font></span></p>
		<p><span lang="ru"><font size="2">&nbsp;</font><select size="2" name="OneOrFew" style="font-size: 8pt">
		<option selected value="0">Один из вариантов ответа</option>
		<option value="1">Несколько вариантов ответа</option></select></span></p><hr>
		<ol>
			<li>
				<p></p>
				<p><textarea rows="2" name="ans[]" cols="45"></textarea><span lang="ru">
				</span></p>
				<p><font size="2"><span lang="ru">Действия при выборе данного варианта ответа: (выбор результатов теста зависит от того какой по величине будут переменные). При выборе данного варианта указанная переменная измениться ниже представленным образом. И так для каждого варианта ответа задается действие с переменной, которое произойдет если такой вариант ответа будет выбран.</span>&nbsp;&nbsp;
				</font></p>
				<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
				<option selected value="0">A</option>
				<option value="1">B</option>
				<option value="2">C</option>
				<option value="3">D</option>
				<option value="4">E</option>
				<option value="5">F</option>
				<option value="6">G</option>
				<option value="7">H</option></select>
				<select size="1" name="opcode[]" style="font-size: 10pt">
				<option selected value="0">+</option>
				<option value="1">-</option></select></span>
				<input type="text" name="operand[]" size="3" value="1"></p>
			</li>
			<li>
				<p></p>
				<p><textarea rows="2" name="ans[]" cols="45"></textarea><span lang="ru">
				</span></p>
				<p><font size="2"><span lang="ru">Действия:</span>&nbsp;&nbsp;
				</font></p>
				<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
				<option selected value="0">A</option>
				<option value="1">B</option>
				<option value="2">C</option>
				<option value="3">D</option>
				<option value="4">E</option>
				<option value="5">F</option>
				<option value="6">G</option>
				<option value="7">H</option></select>
				<select size="1" name="opcode[]" style="font-size: 10pt">
				<option selected value="0">+</option>
				<option value="1">-</option></select></span>
				<input type="text" name="operand[]" size="3" value="1"></p>
			</li>
			<li>
				<p></p>
				<p><textarea rows="2" name="ans[]" cols="45"></textarea><span lang="ru">
				</span></p>
				<p><font size="2"><span lang="ru">Действия:</span>&nbsp;&nbsp;
				</font></p>
				<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
				<option selected value="0">A</option>
				<option value="1">B</option>
				<option value="2">C</option>
				<option value="3">D</option>
				<option value="4">E</option>
				<option value="5">F</option>
				<option value="6">G</option>
				<option value="7">H</option></select>
				<select size="1" name="opcode[]" style="font-size: 10pt">
				<option selected value="0">+</option>
				<option value="1">-</option></select></span>
				<input type="text" name="operand[]" size="3" value="1"></p>
			</li>
			<li>
				<p></p>
				<p><textarea rows="2" name="ans[]" cols="45"></textarea><span lang="ru">
				</span></p>
				<p><font size="2"><span lang="ru">Действия:</span>&nbsp;&nbsp;
				</font></p>
				<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
				<option selected value="0">A</option>
				<option value="1">B</option>
				<option value="2">C</option>
				<option value="3">D</option>
				<option value="4">E</option>
				<option value="5">F</option>
				<option value="6">G</option>
				<option value="7">H</option></select>
				<select size="1" name="opcode[]" style="font-size: 10pt">
				<option selected value="0">+</option>
				<option value="1">-</option></select></span>
				<input type="text" name="operand[]" size="3" value="1"></p>
			</li>
			<li>
				<p></p>
				<p><textarea rows="2" name="ans[]" cols="45"></textarea><span lang="ru">
				</span></p>
				<p><font size="2"><span lang="ru">Действия:</span>&nbsp;&nbsp;
				</font></p>
				<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
				<option selected value="0">A</option>
				<option value="1">B</option>
				<option value="2">C</option>
				<option value="3">D</option>
				<option value="4">E</option>
				<option value="5">F</option>
				<option value="6">G</option>
				<option value="7">H</option></select>
				<select size="1" name="opcode[]" style="font-size: 10pt">
				<option selected value="0">+</option>
				<option value="1">-</option></select></span>
				<input type="text" name="operand[]" size="3" value="1"></p>
			</li>
			<li>
				<p></p>
				<p><textarea rows="2" name="ans[]" cols="45"></textarea><span lang="ru">
				</span></p>
				<p><font size="2"><span lang="ru">Действия:</span>&nbsp;&nbsp;
				</font></p>
				<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
				<option selected value="0">A</option>
				<option value="1">B</option>
				<option value="2">C</option>
				<option value="3">D</option>
				<option value="4">E</option>
				<option value="5">F</option>
				<option value="6">G</option>
				<option value="7">H</option></select>
				<select size="1" name="opcode[]" style="font-size: 10pt">
				<option selected value="0">+</option>
				<option value="1">-</option></select></span>
				<input type="text" name="operand[]" size="3" value="1"></p>
			</li>
			<li>
				<p></p>
				<p><textarea rows="2" name="ans[]" cols="45"></textarea><span lang="ru">
				</span></p>
				<p><font size="2"><span lang="ru">Действия:</span>&nbsp;&nbsp;
				</font></p>
				<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
				<option selected value="0">A</option>
				<option value="1">B</option>
				<option value="2">C</option>
				<option value="3">D</option>
				<option value="4">E</option>
				<option value="5">F</option>
				<option value="6">G</option>
				<option value="7">H</option></select>
				<select size="1" name="opcode[]" style="font-size: 10pt">
				<option selected value="0">+</option>
				<option value="1">-</option></select></span>
				<input type="text" name="operand[]" size="3" value="1"></p>
			</li>
			<li>
				<p></p>
				<p><textarea rows="2" name="ans[]" cols="45"></textarea><span lang="ru">
				</span></p>
				<p><font size="2"><span lang="ru">Действия:</span>&nbsp;&nbsp;
				</font></p>
				<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
				<option selected value="0">A</option>
				<option value="1">B</option>
				<option value="2">C</option>
				<option value="3">D</option>
				<option value="4">E</option>
				<option value="5">F</option>
				<option value="6">G</option>
				<option value="7">H</option></select>
				<select size="1" name="opcode[]" style="font-size: 10pt">
				<option selected value="0">+</option>
				<option value="1">-</option></select></span>
				<input type="text" name="operand[]" size="3" value="1"></p>
			</li>
			<li>
				<p></p>
				<p><textarea rows="2" name="ans[]" cols="45"></textarea><span lang="ru">
				</span></p>
				<p><font size="2"><span lang="ru">Действия:</span>&nbsp;&nbsp;
				</font></p>
				<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
				<option selected value="0">A</option>
				<option value="1">B</option>
				<option value="2">C</option>
				<option value="3">D</option>
				<option value="4">E</option>
				<option value="5">F</option>
				<option value="6">G</option>
				<option value="7">H</option></select>
				<select size="1" name="opcode[]" style="font-size: 10pt">
				<option selected value="0">+</option>
				<option value="1">-</option></select></span>
				<input type="text" name="operand[]" size="3" value="1"></p>
			</li>
			<li>
				<p></p>
				<p><textarea rows="2" name="ans[]" cols="45"></textarea><span lang="ru">
				</span></p>
				<p><font size="2"><span lang="ru">Действия:</span>&nbsp;&nbsp;
				</font></p>
				<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
				<option selected value="0">A</option>
				<option value="1">B</option>
				<option value="2">C</option>
				<option value="3">D</option>
				<option value="4">E</option>
				<option value="5">F</option>
				<option value="6">G</option>
				<option value="7">H</option></select>
				<select size="1" name="opcode[]" style="font-size: 10pt">
				<option selected value="0">+</option>
				<option value="1">-</option></select></span>
				<input type="text" name="operand[]" size="3" value="1"></p>
			</li>
		</ol>		
	</blockquote>
	<hr>
	<p><span lang="ru"><input type="radio" value="0" checked name="end">Еще один 
	вопрос</span></p>
	<p><input type="radio" name="end" value="1"><span lang="ru">Больше 
	вопросов не будет</span></p>
	<p><input type="submit" value="Отправить" name="B1"><input type="reset" value="Сброс" name="B2"></p>
</form>