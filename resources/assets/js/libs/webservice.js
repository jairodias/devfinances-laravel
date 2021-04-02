
class WebService {

    constructor(){
        this.url = window.location.origin + '/api'
        this.timeout = 1000000
        this._successCallback
        this._errorCallback
        this._alwaysCallback
    }

    get(path) {
        $.ajax({
            type: "GET",
            dataType: "json",
            async: true,
            timeout: this.timeout,
            cache: false,
            url: this.url + path,
            error: (request, status, error) => {
                this._errorCallback(request, status, error);
            },
            success: (data) => {
                this._successCallback(data)
            }
        })
    }

    post(path, data) {
        $.ajax({
            type: "POST",
            contentType: 'application/json',
            processData: false,
            async: true,
            timeout: this.timeout,
            url: this.url + path,
            data: JSON.stringify(data),
            error: (request, status, error) => {
                this._errorCallback(request, status, error);
            },
            success: (data) => {
                this._successCallback(data)
            }
        })
    }

    put(path, data) {
        $.ajax({
            type: "PUT",
            contentType: 'application/json',
            processData: false,
            async: true,
            timeout: this.timeout,
            url: this.url + path,
            data: JSON.stringify(data),
            error: (request, status, error) => {
                this._errorCallback(request, status, error);
            },
            success: (data) => {
                this._successCallback(data);
            }
        });
    }

    delete(path) {
        $.ajax({
            type: "DELETE",
            dataType: "json",
            async: true,
            timeout: this.timeout,
            cache: false,
            url: this.url + path,
            error: (request, status, error) => {
                this._errorCallback(request, status, error);
            },
            success: (data) => {
                this._successCallback(data);
            }
        });
    }

    get errorCallback() {
        return this._errorCallback;
    }

    set errorCallback(errorCallback) {
        this._errorCallback = errorCallback;
    }

    get successCallback() {
        return this._successCallback;
    }

    set successCallback(successCallback) {
        this._successCallback = successCallback;
    }

    get alwaysCallback() {
        return this._alwaysCallback;
    }

    set alwaysCallback(alwaysCallback) {
        this._alwaysCallback = alwaysCallback;
    }
}