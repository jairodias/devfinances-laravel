import * as Cookie from "js-cookie"

export class WebService {
    private url: string = window.location.origin + '/api';
    private timeout = 1000000;
    private _successCallback: Function;
    private _errorCallback: Function;
    private _alwaysCallback: Function;

    public get(path: string) {
        $.ajax({
            type: "GET",
            dataType: "json",
            headers: {
                'API-TOKEN': Cookie.get('API-TOKEN')
            },
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

    public post(path: string, data: any) {
        $.ajax({
            type: "POST",
            contentType: 'application/json',
            processData: false,
            headers: {
                'API-TOKEN': Cookie.get('API-TOKEN')
            },
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

    public put(path: string, data: any) {
        $.ajax({
            type: "PUT",
            contentType: 'application/json',
            processData: false,
            headers: {
                'API-TOKEN': Cookie.get('API-TOKEN')
            },
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

    public delete(path: string) {
        $.ajax({
            type: "DELETE",
            dataType: "json",
            headers: {
                'API-TOKEN': Cookie.get('API-TOKEN')
            },
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

    get errorCallback(): Function {
        return this._errorCallback;
    }

    set errorCallback(errorCallback: Function) {
        this._errorCallback = errorCallback;
    }

    get successCallback(): Function {
        return this._successCallback;
    }

    set successCallback(successCallback: Function) {
        this._successCallback = successCallback;
    }

    get alwaysCallback(): Function {
        return this._alwaysCallback;
    }

    set alwaysCallback(alwaysCallback: Function) {
        this._alwaysCallback = alwaysCallback;
    }
}