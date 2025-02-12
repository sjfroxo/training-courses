<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuleExamAnswerRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string>
	 */
	public function rules(): array
	{
		return [
			'value' => ['required', 'string'],
			'module_exam_question_id' => ['required', 'exists:module_exam_questions,id'],
			'module_exam_user_response_id' => ['required', 'exists:module_exam_user_response,id'],
			'is_correct' => ['required', 'boolean'],
			'module_exam_id' => ['required', 'exists:module_exams,id'],
		];
	}

	/**
	 * Получить сообщения об ошибках для определенных правил валидации.
	 *
	 * @return array
	 */
	public function messages(): array
	{
		return [
			'value.required' => 'Поле "Значение" обязательно для заполнения.',
			'value.string' => 'Поле "Значение" должно быть строкой.',
			'module_exam_question_id.required' => 'Поле "Вопрос экзамена модуля" обязательно для заполнения.',
			'module_exam_question_id.exists' => 'Выбранный вопрос экзамена модуля не существует.',
			'is_correct.required' => 'Поле "Правильный ответ" обязательно для заполнения.',
			'is_correct.boolean' => 'Поле "Правильный ответ" должно быть логическим значением (true/false).',
            'module_exam_id.required' => 'Поле "Экзамен модуля" обязательно для заполнения.',
            'module_exam_id.exists' => 'Выбранный экзамен модуля не существует.',
            'module_exam_user_response_id.required' => 'Поле "Ответ от теста" обязательно для заполнения.',
            'module_exam_user_response_id.exists' => 'Выбранный ответ от теста модуля не существует.',
		];
	}
}
