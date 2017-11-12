/**
 * Created by tal on 11/12/2017.
 */

Todos.Todo = DS.Model.extend({
    title: DS.attr('string'),
    isCompleted: DS.attr('boolean')
});

Todos.Todo.FIXTURES = [
// call DB to pull data from server
];