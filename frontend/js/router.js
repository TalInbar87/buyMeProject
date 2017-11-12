/**
 * Created by tal on 11/12/2017.
 */
Todos.Router.map(function() {
    this.resource('todos', { path: '/' });
});

Todos.TodosRoute = Ember.Route.extend({
    model: function() {
        return this.store.find('todo');
    }
});