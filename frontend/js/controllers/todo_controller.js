/**
 * Created by tal on 11/12/2017.
 */
Todos.TodoController = Ember.ObjectController.extend({
    actions: {
        editTodo: function () {
            this.set('isEditing', true);
        },
        acceptChanges: function () {
            this.set('isEditing', false);
            //call server to update
            this.get('model').save();
        },
        removeTodo: function () {
            var todo = this.get('model');
            todo.deleteRecord();
            //call server delete
            todo.save();
        }
    },

    isCompleted: function(key, value){
        var model = this.get('model');

        if (value === undefined) {
            return model.get('isCompleted');
        } else {
            model.set('isCompleted', value);
            model.save();
            return value;
        }

    //    toggle value to DB using update methood
    }.property('model.isCompleted')
});
