/**
 * Created by tal on 11/12/2017.
 */
Todos.TodosController = Ember.ArrayController.extend({
    actions: {
        createTodo: function () {
            var title = this.get('newTitle');
            if (!title.trim()) {
                return;
            }

            var todo = this.store.createRecord('todo', {
                title: title,
                isCompleted: false
            });


            this.set('newTitle', '');

            todo.save();
            var j = {"name": title, "is_done": 0};
            JSON.stringify(j);
            //    call db to add task
            $('#newTask').hide();

        },
        select: function () {
            $('#newTask').show();
        }
    }
});